<?php

namespace FluentHtml\Extension;

trait Tags
{
    /**
     * see: HtmlCore::tag()
     * @param string      $name
     * @param string|null $inner
     * @param string|null $attributes
     * @return $this
     */
    abstract public function tag($name, $inner = null, $attributes = null);

    public function span($inner = null, $attributes = null) {
        return $this->tag('span', $inner, $attributes);
    }

    public function p($inner = null, $attributes = null) {
        return $this->tag('p', $inner, $attributes);
    }

    public function pre($inner = null, $attributes = null) {
        return $this->tag('pre', $inner, $attributes);
    }

    public function code($inner = null, $attributes = null) {
        return $this->tag('code', $inner, $attributes);
    }

    public function h1($inner = null, $attributes = null) {
        return $this->tag('h1', $inner, $attributes);
    }

    public function h2($inner = null, $attributes = null) {
        return $this->tag('h2', $inner, $attributes);
    }

    public function h3($inner = null, $attributes = null) {
        return $this->tag('h3', $inner, $attributes);
    }

    public function h4($inner = null, $attributes = null) {
        return $this->tag('h4', $inner, $attributes);
    }

    public function li($inner = null, $attributes = null) {
        return $this->tag('li', $inner, $attributes);
    }

    public function td($inner = null, $attributes = null) {
        return $this->tag('td', $inner, $attributes);
    }

    public function tr($inner = null, $attributes = null) {
        return $this->tag('tr', $inner, $attributes);
    }

    // :::::::::::::::::::::::::::: void elements ("self closing")

    public function hr($attributes = null) {
        return $this->tag('hr', null, $attributes);
    }

    public function br($attributes = null) {
        return $this->tag('br', null, $attributes);
    }
}
