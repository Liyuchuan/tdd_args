<?php

namespace App;

class BooleanOptionParser implements OptionParser
{
    public function parse(array $args, string $argName): bool
    {
        $index = array_search("-$argName", $args);
        if ($index + 1 < count($args) &&
            !str_starts_with($args[$index + 1], '-')) {
            throw new TooManyArgumentsException();
        }
        return in_array("-$argName", $args);
    }
}