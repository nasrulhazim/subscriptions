<?php

return [
    'enum' => [
        'status' => [
            'Inactive',
            'Active',
        ],
        'type' => [
            'Monthly',
            'Yearly',
        ],
        'duration' => [
            1, 6, 12,
        ],
    ],
    'currency' => 'MYR',
    'redirect' => [
        'success' => 'home', // URI
        'failed' => '/',
    ],
];
