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

        $index = array_search("-$argName", $args);
        $haystack = $args[$index + 2];
        if (!str_starts_with($haystack, '-')) {
            throw new TooManyArgumentsException();
        }
        return $this->parseValue($args[$index + 1]);
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