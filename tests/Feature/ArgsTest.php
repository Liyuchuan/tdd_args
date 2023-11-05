<?php

# Single option
## Happy path

use App\Args;

it('当给定一个 -l 时， 应该返回 true', function () {
    $options = [
        'l' => 'bool'
    ];
    $args = new Args($options, ['-l']);
    $result = $args->getArgument('l');
    expect($result)->toBeTrue();
});

it('当没有给 -l 时，应该返回 false', function() {
    $options = [
        'l' => 'bool'
    ];
    $args = new Args($options, []);
    $result = $args->getArgument('l');
    expect($result)->toBeFalse();
});

it('当给定 -p 8080 时，应该返回 8080', function() {
    $options = [
        'p' => 'int'
    ];
    $args = new Args($options, ['-p', '8080']);
    $result = $args->getArgument('p');
    expect($result)->toBe(8080);
});

it('当给定 -d /usr/logs 时，应该返回 /usr/logs', function () {
    $options = [
        'd' => 'string'
    ];
    $args = new Args($options, ['-d', '/usr/logs']);
    $result = $args->getArgument('d');
    expect($result)->toEqual('/usr/logs');
});

## Sad path
todo('-l t');
todo('t');
todo('-p');
todo('-p 8080 8081');
todo('-d');
todo('-d /usr/logs /usr/local');

## Default value
todo('bool: false');
todo('int: 0');
todo('string: ""');

# Multi options
todo('-l -p 8080 -d /usr/logs');