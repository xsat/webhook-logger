<?php

$file_name = __DIR__ . '/var/log.txt';

if (is_file($file_name)) {
    echo file_get_contents($file_name), PHP_EOL;
} else {
    http_response_code(404);
}
