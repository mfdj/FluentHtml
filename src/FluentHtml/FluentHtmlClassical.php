<?php

namespace FluentHtml;

use FluentHtml\Adaptor\Basics;
use FluentHtml\Adaptor\BonusContainers;
use FluentHtml\Adaptor\BonusTags;
use FluentHtml\Adaptor\Forms;
use FluentHtml\Adaptor\Generics;
use FluentHtml\Adaptor\HB5s;
use FluentHtml\Adaptor\Inputs;
use FluentHtml\Base\AbstractFluent;
use FluentHtml\Factory\Generic;

class FluentHtmlClassical extends AbstractFluent
{
    use Generics, Basics, Forms, Inputs, HB5s, BonusTags, BonusContainers;

    private $root;

    public function __construct($rootTag = null, $attributes = null)
    {
        if ($rootTag)
        {
            $this->root = Generic::stripAngles($rootTag);
            $this->append(
                Generic::open($this->root, $attributes)
            );
        }
    }

    public function append($markup)
    {
        return parent::append($markup);
    }

    public static function make($rootTag = null, $attributes = null)
    {
        return new self($rootTag, $attributes);
    }

    public function __toString()
    {
        if ($this->root)
            return $this->getMarkup() . Generic::close($this->root);

        return $this->getMarkup();
    }
}
