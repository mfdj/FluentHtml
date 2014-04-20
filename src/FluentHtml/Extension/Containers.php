<?php

namespace FluentHtml\Extension;

trait Containers
{
    /**
     * see: HtmlCore::container()
     * @param string      $tag
     * @param string      $inner
     * @param null|string $attributes
     * @return $this
     */
    abstract public function container($tag, $inner, $attributes = null);

    public function div($elements = null, $attributes = null) {
        return $this->container('div', $elements, $attributes);
    }

    public function section($elements = null, $attributes = null) {
        return $this->container('section', $elements, $attributes);
    }

    public function header($elements = null, $attributes = null) {
        return $this->container('header', $elements, $attributes);
    }

    public function footer($elements = null, $attributes = null) {
        return $this->container('footer', $elements, $attributes);
    }

    public function aside($elements = null, $attributes = null) {
        return $this->container('aside', $elements, $attributes);
    }

    public function ul($elements = null, $attributes = null) {
        return $this->container('ul', $elements, $attributes);
    }

    public function ol($elements = null, $attributes = null) {
        return $this->container('ol', $elements, $attributes);
    }

    public function table($elements = null, $attributes = null) {
        return $this->container('table', $elements, $attributes);
    }
}
