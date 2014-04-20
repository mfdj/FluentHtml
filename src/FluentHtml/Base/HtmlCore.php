<?php

namespace FluentHtml\Base;

trait HtmlCore
{
    private $voidElements = [
        'area', 'base', 'br', 'col', 'command',
        'embed', 'hr', 'img', 'input', 'keygen',
        'link', 'meta', 'param', 'source', 'track',
        'wbr'
    ];

    /**
     * see: Appendable::append()
     * @param  string $markup new markup
     * @return $this
     */
    abstract public function append($markup);

    /**
     * @param string      $tag
     * @param null|string $attributes
     * @return $this
     */
    public function open($tag, $attributes = null)
    {
        return $this->append(
            '<' . self::stripAngles($tag) . ($attributes ? " $attributes" : '') . '>'
        );
    }

    /**
     * @param $tag
     * @return $this
     */
    public function close($tag)
    {
        return $this->append(
            '</' . self::stripAngles($tag) . '>'
        );
    }

    /**
     * @param string      $name
     * @param null|string $inner
     * @param null|string $attributes
     * @return $this
     */
    public function tag($name, $inner = null, $attributes = null)
    {
        $name = self::stripAngles($name);

        if (in_array($name, $this->voidElements))
        {
            // void elements ("self closing") cannot have inner content.
            //    see: http://www.w3.org/TR/html5/syntax.html#void-elements
            return $this->append(
                "<$name" . ($attributes ? " $attributes" : '') . '>'
            );
        }

        return $this->append(
            "<$name"
            . ($attributes ? " $attributes" : '') . '>'
            . htmlentities($inner) . "</$name>"
        );
    }

    /**
     * @param string      $tag
     * @param string      $inner
     * @param null|string $attributes
     * @return string
     */
    public function container($tag, $inner, $attributes = null)
    {
        $name = self::stripAngles($tag);

        return $this->append(
            "<$name" . ($attributes ? " $attributes" : '') . '>' . $inner . "</$name>"
        );
    }

    /**
     * @param       $tag
     * @param array $innerCollection
     * @return mixed
     */
    public function tagEach($tag, array $innerCollection)
    {
        $name   = self::stripAngles($tag);
        $markup = '';

        foreach ($innerCollection as $inner)
            $markup .= "<$name" . ($attributes ? " $attributes" : '') . '>' . $inner . "</$name>";

        return $this->append($markup);
    }

    /**
     * @param $input
     * @return $this
     */
    protected function stripAngles($input)
    {
        return preg_replace("~<|>|/~u", '', $input);
    }
}
