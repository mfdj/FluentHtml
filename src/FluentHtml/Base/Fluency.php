<?php

namespace FluentHtml\Base;

trait Fluency
{
    protected $markup = '';
    protected $buffer = '';

    /**
     * @param $markup
     * @return $this
     */
    public function append($markup)
    {
        $this->markup .= $this->buffer;
        $this->buffer = $markup;

        return $this;
    }

    public function __toString()
    {
        return $this->getMarkup();
    }

    /**
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup . $this->buffer;
    }

    /**
     * @param callback $callback
     */
    public function modifyBuffer(callback $callback)
    {

    }
}
