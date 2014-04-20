<?php

require __DIR__ . '/../vendor/autoload.php';

use FluentHtml\Factory\HTML;
use FluentHtml\FluentHtml;
use FluentHtml\AppendHtmlClassical;

# FluentHtml and AppendHtmlClassical —
# same api but one is composed using classical inhertiance and
# a FluentHtml API

echo FluentHtml::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->div(
        HTML::anchor('http://thecoolestsiteontheinternet.com')
    )->hr();

echo AppendHtmlClassical::make('header')
    ->h1('The brown quick fox bought some headphones & vinyl.')
    ->h2('The brown quick fox bought some headphones & vinyl.')
    ->h3('The brown quick fox bought some headphones & vinyl.')
    ->h4('The brown quick fox bought some headphones & vinyl.')
    ->div(
        HTML::anchor('http://thecoolestsiteontheinternet.com')
    );
