<?php

// sad path
use App\TooManyArgumentsException;

todo('int: -p');
it('int: -p 8080 8081', function () {
    (new \App\SingleValuedOptionParser('intval'))->parse(['-p', 8080, 8081], 'p');
})->throws(TooManyArgumentsException::class);
todo('string: -d');
todo('string: -d /usr/logs /usr/vars');
// default value
todo('int: 0');
todo('string: ""');