<?php

namespace FluentHtml\Base;

abstract class AbstractFluent
{
    protected $markup = '';
    protected $buffer = '';
    protected $count = 0;

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