<?php

declare(strict_types=1);

return [

    'storage_disk' => env('MORRIS_STORAGE_DISK'),

    'webhook_secret' => env('MORRIS_WEBHOOK_SECRET'),

    'webmention_io' => [
        'token' => env('MORRIS_WMIO_API_TOKEN'),
        'domain' => env('MORRIS_WMIO_DOMAIN'),
    ],

];
