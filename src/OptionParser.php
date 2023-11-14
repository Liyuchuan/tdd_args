<?php

namespace App;

interface OptionParser
{
    public function parse(array $args, string $argName): mixed;
}