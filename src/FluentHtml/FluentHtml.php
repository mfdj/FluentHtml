<?php

namespace FluentHtml;

use FluentHtml\Adaptor\Basics;
use FluentHtml\Adaptor\BonusContainers;
use FluentHtml\Adaptor\BonusTags;
use FluentHtml\Adaptor\Forms;
use FluentHtml\Adaptor\Generics;
use FluentHtml\Adaptor\HB5s;
use FluentHtml\Adaptor\Inputs;
use FluentHtml\Base\Fluency;
use FluentHtml\Factory\Generic;

class FluentHtml
{
    use Fluency, Generics, Basics, Forms, Inputs, HB5s, BonusTags, BonusContainers
    {
        Fluency::append insteadof Generics;
        Fluency::append insteadof Basics;
        Fluency::append insteadof Forms;
        Fluency::append insteadof Inputs;
        Fluency::append insteadof HB5s;
        Fluency::append insteadof BonusTags;
        Fluency::append insteadof BonusContainers;
    }

    private $root;

    public function __construct($container = null, $attributes = null)
    {
        if ($container)
        {
            $this->root = Generic::stripAngles($container);
            $this->append(
                Generic::open($this->root, $attributes)
            );
        }
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
