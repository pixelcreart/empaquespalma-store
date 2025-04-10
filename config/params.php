<?php

return [
    'adminEmail' => 'admin@empaquespalma.com',
    'senderEmail' => 'hello@empaquespalma.com',
    'senderName' => 'Website Empaques Palma',
    'senderSubject' => 'Nuevo mensaje de contacto',
    'whatsAppPhone' => '50431906463',
    'seo' => [
        'title' => 'Empaques Palma',
        'description' => 'Disfrutá las mejores burritas y platillos hondureños tradicionales en San Pedro Sula. Vení a La Burrita Loca y viví una experiencia con sabor catracho.',
        'keywords' => 'burritas, comida, comida rapida, comida tipica, comida tipica hondureña, comida rapida hondureña, burritas hondureñas, burritas san pedro sula, burritas la burrita loca, la burrita loca, la burrita loca san pedro sula, la burrita loca menu',
        'author' => 'La Burrita Loca',
        'robots' => 'index, follow',
        'opengraph' => [
            'title' => 'La Burrita Loca | Somos la Mamá de las Burritas',
            'description' => 'Probá nuestras burritas, tamal pisque y pollo chuco en San Pedro Sula. Solo en La Burrita Loca.',
            'image' => 'https://ik.imagekit.io/ready/laburrita/img/products/tr:w-1200,h-630/burrita-full-mikis.jpg',
            'url' => 'https://empaquespalma.com',
            'type' => 'website',
        ],
        'twitter' => [
            'card' => 'summary_large_image',
            'title' => 'La Burrita Loca | Somos la Mamá de las Burritas',
            'description' => 'Probá nuestras burritas, tamal pisque y pollo chuco en San Pedro Sula. Solo en La Burrita Loca.',
            'image' => 'https://ik.imagekit.io/ready/laburrita/img/products/tr:w-1200,h-630/burrita-full-mikis.jpg',
        ],
        'business' => [
            '@context' => 'https://schema.org',
            '@type' => 'Restaurant',
            'name' => 'La Burrita Loca',
            'image' => 'https://ik.imagekit.io/ready/laburrita/img/products/tr:w-1200,h-630/burrita-full-mikis.jpg',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Colonia Moderna, 1 Calle, entre 26 y 27 Avenida Bulevar Los Próceres contiguo al Club Hondureño Árabe',
                'addressLocality' => 'San Pedro Sula',
                'addressRegion' => 'Cortes',
                'addressCountry' => 'HN'
            ],
            'url' => 'https://empaquespalma.com',
            'telephone' => '+504 3241-8841',
            'servesCuisine' => 'Honduran, Latin American',
            'priceRange' => '$',
            'openingHours' => ['Mo-Sa 06:00-21:00','Su 07:00-15:00'],
        ],
    ],
];
