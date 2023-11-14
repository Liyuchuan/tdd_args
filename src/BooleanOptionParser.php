<?php

namespace App;

class BooleanOptionParser implements OptionParser
{
    public function parse(array $args, string $argName): bool
    {
        return in_array("-$argName", $args);
    }
}