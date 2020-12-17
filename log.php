<?php

$file_name = __DIR__ . '/var/log.txt';

if (is_file($file_name)) {
    http_response_code(200);
    echo file_get_contents($file_name), PHP_EOL;
} else {
    http_response_code(404);
}
