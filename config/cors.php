<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'posts','post-interactions'], // Add your endpoints here
    'allowed_methods' => ['*'], // Allow all HTTP methods
    'allowed_origins' => ['http://localhost:5173'], // Specify your frontend origin
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
