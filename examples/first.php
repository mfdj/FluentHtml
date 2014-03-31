<?php

require __DIR__ . '/../vendor/autoload.php';

use FluentHtml\Base\Fluency;
use FluentHtml\Factory\FluentAdaptor\Forms;
use FluentHtml\Factory\FluentAdaptor\Generics;
use FluentHtml\Factory\HTML;
use FluentHtml\FluentHtml;
use FluentHtml\FluentHtmlClassical;

//echo (new FluentHtml('ol'))
//    ->tag('li', 'The brown quick fox bought some headphones & vinyl.')
//    ->tag('li', 'There was very little EDM.');
//
//echo HTML::tag('hr');
//
//echo FluentHtml::make('ol')
//    ->tag('li', 'The brown quick fox bought some headphones & vinyl.')
//    ->tag('li', 'There was very little EDM.');
//
//echo HTML::tag('hr');
//
//echo FluentHtml::make('header')
//    ->h1('The brown quick fox bought some headphones & vinyl.')
//    ->h2('The brown quick fox bought some headphones & vinyl.')
//    ->h3('The brown quick fox bought some headphones & vinyl.')
//    ->h4('The brown quick fox bought some headphones & vinyl.')
//    ->div(
//        HTML::anchor('http://thecoolestsiteontheinternet.com')
//    )
//;

echo FluentHtml::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->div(
        HTML::anchor('http://thecoolestsiteontheinternet.com')
    )->hr()
;

echo FluentHtmlClassical::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->div(
        HTML::anchor('http://thecoolestsiteontheinternet.com')
    )
;