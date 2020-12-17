<?php

file_put_contents(
    __DIR__ . '/var/log.txt',
    json_encode(
        [
            'GET' => $_GET,
            'POST' => $_POST,
            'FILES' => $_FILES,
            'DATA' => file_get_contents('php://input'),
        ],
        JSON_PRETTY_PRINT
    ),
    FILE_APPEND
);

http_response_code(200);
