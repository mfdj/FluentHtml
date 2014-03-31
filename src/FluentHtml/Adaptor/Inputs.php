<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Input;

trait Inputs
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function inputButton($name, $value = null)
    {
        return append(
            Input::inputButton($name, $value)
        );
    }
}
