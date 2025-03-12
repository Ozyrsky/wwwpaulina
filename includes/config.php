<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}

$config = [
    'site_name' => 'Paulina Macherzyńska - Lash & Brow Expert',
    'site_description' => 'Salon stylizacji rzęs i brwi Pauliny Macherzyńskiej. Profesjonalne usługi stylizacji, mezoterapii i zabiegów pielęgnacyjnych.',
    'site_url' => 'https://www.paulinamacherzynska.pl/',
    'logo_path' => 'assets/images/logo/1.png',
    'contact' => [
        'address' => 'Chrystiana Piotra Aignera 6, 00-710, Warszawa, Mokotów',
        'phone' => '+48 570 555 558',
        'hours' => 'Poniedziałek - Piątek: 9:00 - 18:00<br>Sobota: 10:00 - 15:00'
    ],
    'social' => [
        'facebook' => '#',
        'instagram' => '#'
    ]
];
