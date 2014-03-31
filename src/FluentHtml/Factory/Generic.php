<?php

namespace FluentHtml\Factory;

trait Generic
{
    private static $voidElements = [
        'area', 'base', 'br', 'col', 'command',
        'embed', 'hr', 'img', 'input', 'keygen',
        'link', 'meta', 'param', 'source', 'track',
        'wbr'
    ];

    /**
     * @param      $tag
     * @param null $attributes
     * @return string
     */
    public static function open($tag, $attributes = null)
    {
        return '<' . self::stripAngles($tag) . ($attributes ? " $attributes" : '') . '>';
    }

    /**
     * @param $input
     * @return mixed
     */
    public static function stripAngles($input)
    {
        return preg_replace("~<|>|/~u", '', $input);
    }

    /**
     * @param $tag
     * @return string
     */
    public static function close($tag)
    {
        return '</' . self::stripAngles($tag) . '>';
    }

    /**
     * @param      $tag
     * @param      $inner
     * @param null $attributes
     * @return string
     */
    public static function container($tag, $inner, $attributes = null)
    {
        $name = self::stripAngles($tag);

        return "<$name" . ($attributes ? " $attributes" : '') . '>' . $inner . "</$name>";
    }

    /**
     * @param      $name
     * @param null $inner
     * @param null $attributes
     * @return string
     */
    public static function tag($name, $inner = null, $attributes = null)
    {
        $name = self::stripAngles($name);

        // void elements ("self closing") cannot have inner content.
        // see: http://www.w3.org/TR/html5/syntax.html#void-elements
        if (in_array($name, self::$voidElements))
            return "<$name" . ($attributes ? " $attributes" : '') . '>';
        else
            return "<$name"
            . ($attributes ? " $attributes" : '') . '>'
            . htmlentities($inner) . "</$name>";
    }

    /**
     * @param       $tag
     * @param array $innerCollection
     * @return string
     */
    public static function tagEach($tag, array $innerCollection, $attributes = null)
    {
        $name = self::stripAngles($tag);
        $markup = '';

        foreach ($innerCollection as $inner)
            $markup .= "<$name" . ($attributes ? " $attributes" : '') . '>' . $inner . "</$name>";

        return $markup;
    }
}
