<?php

namespace App;

class SingleValuedOptionParser implements OptionParser
{

    private string $valueParser;

    public function __construct(string $valueParser)
    {
        $this->valueParser = $valueParser;
    }

    public function parse(array $args, string $argName): mixed
    {
        $value = $args[array_search("-$argName", $args) + 1];
        return $this->parseValue($value);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function parseValue(string $value): mixed
    {
        return call_user_func($this->valueParser, $value);
    }
}