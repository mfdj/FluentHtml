<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\Basic;

trait Basics
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function head($elements = null)
    {
        return $this->append( 
            Basic::head($elements)
        );
    }

    public function headExtras($title = null, $css = null, $js = null)
    {
        return $this->append( 
            Basic::headExtras($title, $css, $js)
        );
    }

    public function img($src, $alt = null, $width = null, $height = null)
    {
        return $this->append( 
            Basic::img($src, $alt, $width, $height)
        );
    }

    public function anchor($href, $inner = null, $target = null)
    {
        return $this->append( 
            Basic::anchor($href, $inner, $target)
        );
    }
}
