<?php

require __DIR__ . '/../vendor/autoload.php';

use FluentHtml\FluentHtml;

header('Content-type: text/plain;');

$html = new FluentHtml('div', 'class="one"');

// disbaling the buffer breaks initial containers… hmmm
$html
    ->h1('funk paradize')
    ->useBuffer(false);
