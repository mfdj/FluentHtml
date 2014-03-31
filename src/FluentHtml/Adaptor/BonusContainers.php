<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Generic;

trait BonusContainers
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function div($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('div', $elements, $attributes)
        );
    }

    public function section($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('section', $elements, $attributes)
        );
    }

    public function header($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('header', $elements, $attributes)
        );
    }

    public function footer($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('footer', $elements, $attributes)
        );
    }

    public function aside($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('aside', $elements, $attributes)
        );
    }

    public function ul($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('ul', $elements, $attributes)
        );
    }

    public function ol($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('ol', $elements, $attributes)
        );
    }

    public function table($elements = null, $attributes = null)
    {
        return $this->append(
            Generic::container('table', $elements, $attributes)
        );
    }
} 