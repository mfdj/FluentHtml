<?php

namespace FluentHtml\Extension;

/**
 * http://html5boilerplate.com/
 */
trait HB5s
{
    /**
     * see: Appendable::append()
     * @param  string $markup new markup
     * @return $this
     */
    abstract public function append($markup);

    public function h5bpHtml()
    {
        return $this->append(<<<MARKUP
<!DOCTYPE html>
<!--[if lt IE 7]>     <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
MARKUP
        );
    }

    /**
     * ToDo: add modernizr, add jquery somehow…
     */
    public function h5bpHead($title = null, $css = null, $js = null)
    {
        return $this->append(<<<MARKUP
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <title>$title</title>
    <style>$css</style>
    <script>$js</script>
</head>
MARKUP
        );
    }
}
