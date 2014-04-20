<?php

require __DIR__ . '/../vendor/autoload.php';

use FluentHtml\FluentHtml;
use FluentHtml\FluentHtmlClassical;

# FluentHtml and AppendHtmlClassical —
# same api but one is composed using classical inhertiance and
# a FluentHtml API

echo FluentHtml::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->open('div')
    ->a('http://thecoolestsiteontheinternet.com')
    ->close('div')
    ->hr();

echo FluentHtmlClassical::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->open('div')
    ->a('http://thecoolestsiteontheinternet.com')
    ->close('div');
