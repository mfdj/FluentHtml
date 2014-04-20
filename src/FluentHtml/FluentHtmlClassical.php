<?php

namespace FluentHtml;

use FluentHtml\Base\AbstractAppend;
use FluentHtml\Base\HtmlCore;
use FluentHtml\Extension\Basics;
use FluentHtml\Extension\Containers;
use FluentHtml\Extension\Forms;
use FluentHtml\Extension\HB5;
use FluentHtml\Extension\Inputs;
use FluentHtml\Extension\Tags;

class FluentHtmlClassical extends AbstractAppend
{
    use HtmlCore, Basics, Forms, Inputs, HB5, Tags, Containers;

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

    public function append($markup)
    {
        return parent::append($markup);
    }

    public function getProduct()
    {
        if ($this->root)
            return parent::getProduct() . "</" . $this->root . ">";

        return parent::getProduct();
    }
}
