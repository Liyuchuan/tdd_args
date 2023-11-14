<?php

namespace App;

class Args
{
    private array $options;

    private array $args;

    private array $map;

    public function __construct(array $options, array $args)
    {
        $this->initMap();
        $this->options = $options;
        $this->args = $args;
    }

    private function initMap()
    {
        $this->map = [
            'bool' => new BooleanOptionParser(),
            'int' => new SingleValuedOptionParser('intval'),
            'string' => new SingleValuedOptionParser('strval'),
        ];
    }

    public function getArgument(string $argName): mixed
    {
        $parser = $this->map[$this->options[$argName]];
        return $parser->parse($this->args, $argName);
    }

}

