<?php

use App\TooManyArgumentsException;

// sad path
it('bool: -l t', function () {
    (new \App\BooleanOptionParser())->parse(['-l', 't'], 'l');
})->throws(TooManyArgumentsException::class);

// default value
it('bool: false', function () {
    expect((new \App\BooleanOptionParser())->parse([], 'l'))->toBeFalse();
});
