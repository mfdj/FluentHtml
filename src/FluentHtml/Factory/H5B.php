<?php

namespace FluentHtml\Factory;

trait H5B
{
    public static function h5bpHtml()
    {
        return <<<MARKUP
<!DOCTYPE html>
<!--[if lt IE 7]>     <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
MARKUP;
    }

    public static function h5bpHead($title = null, $css = null, $js = null)
    {
        return <<<MARKUP
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <title>$title</title>
    <style>$css</style>
    <script>$js</script>
    <!-- add modernizr -->
    <!-- add jquery? -->
</head>
MARKUP;
    }
} 