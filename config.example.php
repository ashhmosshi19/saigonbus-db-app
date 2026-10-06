<?php

return [
    'host' => getenv('SAIGONBUS_DB_HOST') ?: '127.0.0.1',
    'user' => getenv('SAIGONBUS_DB_USER') ?: 'root',
    'password' => getenv('SAIGONBUS_DB_PASSWORD') ?: '',
    'name' => getenv('SAIGONBUS_DB_NAME') ?: 'bus_system',
];
