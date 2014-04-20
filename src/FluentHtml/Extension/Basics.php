<?php

namespace FluentHtml\Extension;

/**
 *
 */
trait Basics
{
    /**
     * see: Appendable::append()
     * @param  string $markup new markup
     * @return $this
     */
    abstract public function append($markup);

    public function head($elements = null)
    {
        return $this->append(
            "<head><meta charset='utf-8'>$elements</head>"
        );
    }

    public function htmlHead($elements = null)
    {
        return $this->append(<<<MARKUP
<!DOCTYPE html>
<head><meta charset="utf-8">$elements</head>
MARKUP
        );
    }

    public function headExtras($title = null, $css = null, $js = null)
    {
        return $this->append(<<<MARKUP
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title>$title</title>
    <style>$css</style>
    <script>$js</script>
</head>
MARKUP
        );
    }

    public function img($src, $alt = null, $width = null, $height = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/img
         * Missing: crossorigin, ismap, usemap
         */
        return $this->append(
            "<img src='$src'"
            . ($alt ? " alt='$alt'" : '')
            . ($width ? " width='$width'" : '')
            . ($height ? " height='$height'" : '')
            . ">"
        );
    }

    public function a($href, $inner = null, $target = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/a
         * Missing: download, media, ping, rel, type
         */
        return $this->append(
            "<a href='$href'"
            . ($target ? " target='$target'" : '')
            . '>' . htmlentities(($inner ? $inner : $href))
            . '</a>'
        );
    }
}
