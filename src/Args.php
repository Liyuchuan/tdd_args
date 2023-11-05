<?php

namespace App;

class Args
{
    private array $options;

    private array $args;

    public function __construct(array $options, array $args)
    {
        $this->options = $options;
        $this->args = $args;
    }

    public function getArgument(string $argName): mixed
    {
        $value = null;
        if ($this->options[$argName] == 'bool') {
            $value = in_array("-$argName", $this->args);
        } else if ($this->options[$argName] == 'int') {
            $index = array_search("-$argName", $this->args);
            $value = (int)$this->args[$index + 1];
        } else if ($this->options[$argName] == 'string') {
            $index = array_search("-$argName", $this->args);
            $value = $this->args[$index + 1];
        }
        return $value;
    }
}