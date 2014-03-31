<?php

namespace FluentHtml\Factory;

trait Basic
{
    public static function head($elements = null)
    {
        return "<head><meta charset='utf-8'>$elements</head>";
    }

    public static function htmlHead($elements = null)
    {
        return <<<MARKUP
<!DOCTYPE html>
<head><meta charset="utf-8">$elements</head>
MARKUP;
    }

    public static function headExtras($title = null, $css = null, $js = null)
    {
        return <<<MARKUP
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title>$title</title>
    <style>$css</style>
    <script>$js</script>
</head>
MARKUP;
    }

    public static function img($src, $alt = null, $width = null, $height = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/img
         * Missing: crossorigin, ismap, usemap
         */
        return "<img src='$src'"
        . ($alt ? " alt='$alt'" : '')
        . ($width ? " width='$width'" : '')
        . ($height ? " height='$height'" : '')
        . ">";
    }

    public static function anchor($href, $inner = null, $target = null)
    {
        /**
         * See: https://developer.mozilla.org/en-US/docs/Web/Traits/Element/a
         * Missing: download, media, ping, rel, type
         */
        return "<a href='$href'"
        . ($target ? " target='$target'" : '')
        . '>' . htmlentities(($inner ? $inner : $href))
        . '</a>';
    }
} 