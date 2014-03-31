<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Form;

trait Forms
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function select($name, $inner = null)
    {
        return append(
            Form::select($name, $inner)
        );
    }

    public function label($inner, $for)
    {
        return append(
            Form::label($inner, $for)
        );
    }

    public function input($type, $name, $value = null)
    {
        return append(
            Form::input($name, $type, $value)
        );
    }

    public function button($name, $type = 'submit', $inner = 'submit')
    {
        return append(
            Form::button($name, $type, $value)
        );
    }

    public function options(array $values, array $labels = null, $selectedValue = null)
    {
        return append(
            Form::options($values, $labels, $selectedValue)
        );
    }
}
