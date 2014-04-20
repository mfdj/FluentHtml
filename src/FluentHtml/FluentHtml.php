<?php

namespace FluentHtml;

use FluentHtml\Base\Appendable;
use FluentHtml\Base\HtmlCore;
use FluentHtml\Extension\Basics;
use FluentHtml\Extension\Containers;
use FluentHtml\Extension\Tags;
use FluentHtml\Extension\Forms;
use FluentHtml\Extension\HB5s;
use FluentHtml\Extension\Inputs;

class FluentHtml
{
    use Appendable, HtmlCore,
        Basics, Forms, Inputs, HB5s, Tags, Containers
    {
        Appendable::append insteadof Basics;
        Appendable::append insteadof Forms;
        Appendable::append insteadof Inputs;
        Appendable::append insteadof HB5s;
        Appendable::append insteadof Tags;
        Appendable::append insteadof Containers;
        Appendable::getProduct as appendableGetProduct;
    }

    private $root;

    public function __construct($container = null, $attributes = null)
    {
        if ($container)
        {
            $this->root = $this->stripAngles($container);
            $this->open($this->root, $attributes);
        }
    }

    public static function make($container = null, $attributes = null)
    {
        return new self($container, $attributes);
    }

    public function getProduct()
    {
        if ($this->root)
            return $this->appendableGetProduct() . "</" . $this->root . ">";

        return $this->appendableGetProduct();
    }
}
