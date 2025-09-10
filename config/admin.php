<?php
return [
    'admin' => [
        'language' => 'pl',             // Domyśłny język Admina => do mailingu
        'active' => 1,                  // Włączony/wyłączony mailing powiadomień w formularzu
        'mail' => 'office@hussaria.pl', // Adres e-mail do wysyłki powiadomień
        'save_to_file' => '../archive/summary.txt',  // Plik txt bazą wysłanych zamówień
        'timer' => 120,                 // sekund => czas wizyty przed wysłaniem || ponownym wysłaniem formularza
        'attempts' => 3,                // Prób wysłania formularza || Prób z invalid token w SESSION
        'token_age' => 900,             // 15 min => żywotność tokena w SESSION
        'secret_key' => 'fdc91d1b8d46eda896acf7ca3da923a1',
        'path_url' => 'https://electra.hussaria.pl/configurator/',
        'company_name' => 'HUSSARIA Sp. z o.o.',
        'company_address' => 'ul. Kwiatkowskiego 1, 37-450 Stalowa Wola',
        'office_phone' => '+48 690 644 890',
        'office_email' => 'office@hussaria.pl'
    ],
];
