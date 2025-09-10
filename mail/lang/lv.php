<?php
return [
    'subject' => [
        'admin' => 'Zamówienie [LV] - Hussaria Electra',
        'client' => 'Pasūtījuma apstiprinājums - Hussaria Electra',
    ],
    'content' => [
        'title' => 'Pasūtījuma apstiprinājums',
        'header' => [
            'hello' => 'Laipni lūgti',
            'shop' => 'Hussaria Electra stallī! ',
            'intro' => 'Paldies, ka izvēlējāties ELEKTRISKO KASTI JĀŠANAS SPORTA INVENTĀRA PĀRVADĀŠANAI un aizpildījāt veidlapu. Informāciju par pasūtījumu atradīsiet zemāk. Mēs ar Jums sazināsimies, lai palīdzētu noformēt pasūtījumu.'
        ],
        'summary' => [
            'table' => [
                'header' => [
                    'title' => 'Pasūtījuma detaļas',
                    'date' => 'Datums'
                ],
                'rows' => [
                    'total' => 'Pasūtījuma summa',
                    'name' => 'Vārds/Uzņēmuma nosaukums',
                    'lastname' => 'Uzvārds/Nodokļu identifikācijas numurs (NIP)',
                    'email' => 'E-mail',
                    'phone' => 'Tālrunis',
                    'order' => 'Pasūtījums',
                    'extra' => 'Papildus'
                ]
            ]
        ],
        'helper' => [
            'head' => 'Jums ir jautājumi? Sazinieties ar mums',
            'content' => 'Izdarot pirkumu, Jūs saņemat augstākās kvalitātes aprīkojumu un mūsu komandas informatīvo atbalstu.',
            'info' => 'Esam pieejami no pirmdienas līdz piektdienai no 7:00 līdz 15:00.'
        ], 
    ],
    'footer' => [
        'link' => 'https://electra.hussaria.pl/',
        'copyright' => '© 2025 electra.hussaria.pl'
    ],
    'notifications' => [
        'success' => [
            'send' => 'Paldies! Jūsu pasūtījums ir nosūtīts apstrādei. Mūsu komanda ar Jums sazināsies drīzumā.'
        ],
        'errors' => [
            'disabled' => 'Pasūtījumu veikšana pa e-pastu ir atspējota!',
            'validate' => 'Veidlapā ir nederīgi/ tukši lauki',
            'send' => 'Kļūda, sūtot veidlapu',
            'empty' => 'Nav produktu iepirkumu grozā',
            'fields' => [
                'empty' => [
                    'name' => 'Lauks ir obligāts',
                    'lastname' => 'Lauks ir obligāts',
                    'email' => 'E-pasts ir obligāts',
                    'phone' => 'Tālruņa numurs ir obligāts',
                    'agree' => 'Jums jāpiekrīt noteikumiem',
                    'accept' => 'Jums jāpiekrīt nosacījumiem',
                ],
                'incorect' => [
                    'email' => 'Nepareizs e-pasta adreses formāts',
                    'phone' => 'Nepareizs tālruņa numura formāts [9-15 rakstzīmes]',
                    'browser' => 'Neautorizēts lietotājs',
                    'timer' => 'Veidlapa tika nosūtīta pārāk ātri. Lūdzu, pagaidiet dažas minūtes.',
                    'trying' => 'Pārāk daudz mēģinājumu nosūtīt veidlapu'
                ]
            ]
        ],
    ]
];