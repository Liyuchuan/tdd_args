<?php

require_once "../vendor/autoload.php";

use App\Args;



$options = [
    'p' => 'int'
];
$args = new Args($options, ['-p', '8080']);
$result = $args->getArgument('p');
echo $result;
