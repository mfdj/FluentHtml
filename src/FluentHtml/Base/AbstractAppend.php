<?php

namespace FluentHtml\Base;

abstract class AbstractAppend
{
    protected $product = '';
    protected $buffer = '';
    protected $buffered = true;

    /**
     * @param $markup
     * @return $this
     */
    public function append($markup)
    {
        if (!$this->buffered)
            echo $markup;
        else
        {
            $this->product .= $this->buffer;
            $this->buffer = $markup;
        }

        return $this;
    }

    /**
     * Disabling the buffer immediately echos content.
     *
     * @param bool $enable
     */
    public function useBuffer($enable = true)
    {
        if (!$enable)
            $this->flushProduct();

        $this->buffered = $enable;

        return $this;
    }

    /**
     * @return $this
     */
    public function flushProduct()
    {
        echo $this->getProduct();

        $this->product = $this->buffer = null;

        return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product . $this->buffer;
    }

    public function __toString()
    {
        return $this->getProduct();
    }
} 