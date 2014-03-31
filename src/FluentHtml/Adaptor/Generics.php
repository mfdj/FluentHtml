<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Generic;

trait Generics
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function open($tag, $attributes = null)
    {
        return $this->append(
            Generic::open($tag, $attributes)
        );
    }

    public function close($tag)
    {
        return $this->append(
            Generic::close($tag)
        );
    }

    public function tag($name, $inner = null, $attributes = null)
    {
        return $this->append(
            Generic::tag($name, $inner, $attributes)
        );
    }

    public function tagEach($tag, array $innerCollection)
    {
        return $this->append(
            Generic::tagEach($tag, $innerCollection)
        );
    }
}
