<?php

# Single option
## Happy path

todo('当给定一个 -l 时， 应该返回 true');
todo('当没有给 -l 时，应该返回 false');
todo('当给定 -p 8080 时，应该返回 8080');
todo('当给定 -d /usr/logs 时，应该返回 /usr/logs');

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