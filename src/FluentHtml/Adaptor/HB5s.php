<?php

namespace FluentHtml\Adaptor;

use FluentHtml\Factory\H5B;

trait HB5s
{
    /**
     * Implementation provided by FluentHtml\Base\Fluency::append()
     * @param $markup
     */
    public function append($markup)
    {
        // abstract method: intentionally empty
    }

    public function h5bpHtml()
    {
        return append(
            H5B::h5bpHtml()
        );
    }

    public function h5bpHead($title = null, $css = null, $js = null)
    {
        return append(
            H5B::h5bpHead($title, $css, $js)
        );
    }
}
