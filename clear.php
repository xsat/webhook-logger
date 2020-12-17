<?php

$file_name = __DIR__ . '/var/log.txt';

if (is_file($file_name)) {
    file_put_contents($file_name, '');
    echo 'Log has been cleared', PHP_EOL;
} else {
    http_response_code(404);
}
