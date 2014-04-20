<?php

require __DIR__ . '/../vendor/autoload.php';

use FluentHtml\FluentHtml;

header('Content-type: text/plain;');

$html = new FluentHtml('div', 'class="one"');

$html
    ->useBuffer(false)
    ->h1('funk paradize');