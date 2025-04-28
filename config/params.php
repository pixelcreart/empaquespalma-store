<?php

return [
    'adminEmail' => 'admin@empaquespalma.com',
    'adminName' => 'Empaques Palma',
    'senderEmail' => 'hello@empaquespalma.com',
    'senderName' => 'Website Empaques Palma',
    'whatsAppPhone' => '50431906463',
    'seo' => [
        'title' => 'Empaques Palma | Bolsas de terciopelo para joyería en Honduras',
        'description' => 'Empaques Palma, tienda 100% en línea de empaques para joyería. Elegancia, calidad y presentación en cada detalle. Envíos a todo Honduras.',
        'keywords' => 'empaques para joyería, bolsas de terciopelo para joyas, empaques personalizados Honduras, tienda online de empaques, empaques elegantes para marcas, presentación de joyería, bolsas pequeñas para joyas, Empaques Palma',
        'author' => 'Empaques Palma | Diin Company',
        'robots' => 'index, follow',
        'opengraph' => [
            'title' => 'Empaques Palma | Bolsas elegantes para joyería',
            'description' => 'Tienda online especializada en empaques para joyería. Bolsas de terciopelo con estilo y calidad. Envíos a todo el país.',
            'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-1200,h-630/jumbotron.png',
            'url' => 'https://empaquespalma.com',
            'type' => 'website',
            'locale' => 'es_HN',
        ],
        'twitter' => [
            'card' => 'summary_large_image',
            'title' => 'Empaques Palma | Bolsas elegantes para joyería',
            'description' => 'Tienda online especializada en empaques para joyería. Bolsas de terciopelo con estilo y calidad. Envíos a todo el país.',
            'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-1200,h-630/jumbotron.png',
        ],
        'business' => [
            '@context' => 'https://schema.org',
            '@type' => 'Retail',
            'name' => 'Empaques Palma',
            'image' => 'https://ik.imagekit.io/ready/corpalma/img/site/tr:w-1200,h-630/jumbotron.png',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'San Pedro Sula',
                'addressRegion' => 'Cortes',
                'addressCountry' => 'HN'
            ],
            'url' => 'https://empaquespalma.com',
            'telephone' => '+504 3190-6463',
            'priceRange' => '$',
            'openingHours' => ['Mo-Sa 06:00-21:00','Su 07:00-15:00'],
        ],
    ],
    'cloudflare' => [
        'siteKey' => '0x4AAAAAABLhcb8mu6PQQPfF',
        'secretKey' => '0x4AAAAAABLhceO0clm3Tny-hBjWIOZRpz4',
    ],
    'sendgrid' => [
        'apikey' => $_ENV['SENDGRID_APIKEY'],
    ],
    'googleAnalytics' => [
        'key' => 'G-PHZJ74G2Z5',
    ],
];
