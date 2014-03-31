<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Generic;

trait BonusTags
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    // ----------- containery tags (content is escaped)

    public function span($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('span', $inner, $attributes)
        );
    }

    public function p($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('p', $inner, $attributes)
        );
    }

    public function pre($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('pre', $inner, $attributes)
        );
    }

    public function code($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('code', $inner, $attributes)
        );
    }

    // ----------- headers

    public function h1($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('h1', $inner, $attributes)
        );
    }

    public function h2($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('h2', $inner, $attributes)
        );
    }

    public function h3($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('h3', $inner, $attributes)
        );
    }

    public function h4($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('h4', $inner, $attributes)
        );
    }

    // ----------- list

    public function li($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('li', $inner, $attributes)
        );
    }

    // ----------- table

    public function td($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('td', $inner, $attributes)
        );
    }

    public function tr($inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag('tr', $inner, $attributes)
        );
    }

    // ----------- void elements ("self closing")

    public function hr($attributes = null)
    {
        return $this->append(
            Generic::tag('hr', null, $attributes)
        );
    }

    public function br($attributes = null)
    {
        return $this->append(
            Generic::tag('br', null, $attributes)
        );
    }
}
