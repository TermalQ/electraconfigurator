<?php
// =========== NOTE =============
// delivery > type: numeric => dodaje cenę dostawy
//                  text    => wyświetla napis 
// ==============================
// show_price       0   => button "wycena"
//                  1   => button "add to cart"
// ==============================
// price             0  => 0  
//                  225 => aktualna cena 
//                  -1  => zapytaj o wycenę (!)
// ==============================

return [
    'settings' => [
        'theme' => 'Mainiet motīvu',
        'currency' => 'EUR',
        'delivery' => [
            'pack' => [
                'type' => 'text',
                'value' => 'individuālais novērtējums',
                'help' => '',   // extra info np: darmowa dostawa od zamówienia 300zł
                'free' => ''  // darmowy po przekroczeniu wartości zamówienia
            ],
            'products' => [
                'type' => 'text',
                'value' => 'individuālais novērtējums',
                'help' => '',
                'free' => ''
            ]
        ],
        'discount' => [
            'name' => 'Atlaide',
            'value' => 0,
        ],
        'fees' => [
            'name' => 'Maksas',
            'value' => 0,
        ]
    ],

    'title' => 'Konfigurētājs ⚡ Elektriskais seglu skapis zirgu stallim 🔋 Hussaria Electra 🚀',
    'header' => 'Pieprasīt cenas piedāvājumu', // => Poprosić o wycenę [Formularz zamówienia]
    'helper' => 'Konfigurējiet savu ELEKTRISKO SEGULU SKAPIS un iesniedziet veidlapu - mēs sazināsimies ar jums un vadīsim jūs caur nākamajiem pasūtījuma procesa soļiem 😊',
    'form' => [
        'colors' => [
            'title' => 'Kastes krāsa',
            'fields' => [
                'label' => 'Kastes krāsa',
                'help' => 'Izvēlieties krāsu',
                'info' => 'Pieejamā krāsu palete, lai mainītu iepakojuma krāsu',
            ],
        ],
        'marker' => [
            'title' => 'Personalizēšana',
            'fields' => [
                'label' => 'Personalizācija',
                'help' => 'Izvēlieties opcijas',
                'info' => 'Pieejamās personalizācijas opcijas paki',
                'holder' => 'Teksts'
            ],
            'options' => [
                'grawer' => [
                    'title' =>'Grawerēšana',
                    'price' => [
                        'show' => 0,
                        'value' => -1,
                        'promo' => '',
                    ],
                ],
                'texts' => [
                    'title' =>'Teksts',
                    'price' => [
                        'show' => 0,
                        'value' => -1,
                        'promo' => '',
                    ],
                ],
            ],
            'tools' => [
                'font-color' => 'Krāsa',
                'font-align' => 'Izlīdzināšana',
                'font-style' => 'Formatēšana',
                'font-size' => 'Izmērs',
                'font-family' => 'Fontu ģimene',

            ],
            'flag' => [
                'title' => 'Karogu',
                'fields' => [
                    'label' => 'Karogu',
                    'holder' => 'Ievadiet valsts nosaukumu',
                    'info' => '',
                    'warning' => 'Ievadiet valsts nosaukumu (vai kodu: USA, PL, FR, UK utt.)'
                ],
                'price' => [
                        'show' => 0,
                        'value' => -1,
                        'promo' => ''
                    ],
            ]
        ],
        'info' => [
            'send-pdf' => 'Attēlu failus PDF formātā nosūtīt uz adresi',
            'send-mail' => 'biuro@hussaria.pl'
        ],
        'buttons' => [
            'save' => 'Saglabāt konfigurāciju',
            'cart' => 'Atlasītie produkti', // => Wybrane produkty [Koszyk],
            'add' => 'Produktu salīdzinājums', // => Porównianie produktów [Dodaj do Koszyka]
            'view' => 'Skatīt grozu',
            'submit' => 'Pieprasīt piedāvājumu', // => Poprosić o wycenę [Wyślij formularz]
            'delete' => 'Dzēst'
        ],
        'cart' => [
            'product-image' => 'Foto',
            'product-name' => 'Nosaukums',
            'product-quantity' => 'Daudzums',
            'product-total' => 'Kopā',
        ],
        'errors' => [
            'add-product' => 'Kļūda: Nevar pievienot produktu grozam!',
            'del-product' => 'Kļūda: Nevar izdzēst produktu no groza!',
        ],
        'notification' => [
            'add-package' => 'Produkts pievienots piedāvājuma veidlapai',
            'update-package' => 'Konfigurācija tika veiksmīgi atjaunināta',
        ],

        // ========================

        'person' => [
            'title' => 'Personīgā informācija',
            'fields' => [
                'first_name' => 'Vārds/Firma',
                'last_name' => 'Uzvārds/NIP numurs',
                'email' => 'E-mail',
                'phone' => 'Tālrunis',
                'address' => 'Adrese',
                'city' => 'Pilsēta',
                'post_code' => 'Pasta indekss',
                'country' => 'Valsts',
            ],
        ],
        'payments' => [
            'title' => 'Izvēlieties maksājuma veidu',
        ],
        'order' => [
            'title' => 'Pasūtījums',
            'accept' => [
                'title' => 'Es piekrītu, ka personas dati, kas ievadīti veidlapā, tiek apstrādāti, lai sniegtu atbildi uz iesniegto pieprasījumu saskaņā ar',
                'name' => 'Privātuma politika',
                'link' => 'https://electra.hussaria.pl/content/17-polityka-prywatnosci',
            ],
            'agree' => [
                'title' => 'Es piekrītu',
                'name' => 'noteikumiem',
                'link' => 'https://electra.hussaria.pl/pl/content/16-regulamin',
                'shop' => 'interneta veikala'
            ]
        ],
        'order_summary' => [
            'value' => 'Pasūtījuma vērtība',
            'cost' => 'Piegādes izmaksas',
            'amount' => 'Kopā',
            'back' => 'Atpakaļ',
            'notification' => 'Produkts tika pievienots!',
            'confirm' => 'Paldies par pasūtījumu!',
        ]
    ],
    
    //===============
    'package' => [
        'active' => 1,
        'name' => 'Elektriskais seglu skapis',
        'desc' => 'Elektriskais seglu skapis - pasūtiet personalizētu elektriskās kravas automašīnas kravas platformu. Lielisks risinājums seglu un jāšanas aprīkojuma glabāšanai. Aprīkots ar lieliem riteņiem un elektrisko piedziņu, tas nodrošina komfortu, vieglu manevrēšanu un novērš fizisku piepūli. Lieliska izvēle jāšanas sporta entuziastiem un sacensību dalībniekiem.',
        'keywords' => 'hussaria electra, elektriskais seglu skapis, elektropiedziņa',
        'thumb' => 'he_thumb_elektryczna_paka.png',
        'schema' => [
            'name' => 'Elektriskais seglu skapis zirgu stallim',
            'image' => 'elektryczna_paka_jezdziecka_he.jpg',
            'currency' => 'EUR',
            'desc' => 'Elektriskais seglu skapis zirgu stallim',
            'brand' => 'Hussaria Electra'
        ],
        'status' => 'cena pēc vienošanās',
        'deadline' => 'Kad preces nav noliktavā, piegādes laiks tiek pagarināts līdz 3-4 nedēļām',

        'show_price' => 0,
        'price' =>  -1, // 8487
        'promo' => '',
        'shipping' => [
            'active' => 1,
            'free' => 0,
            'price' => 'individuāla cenu noteikšana',
            'promo' => '',
            'class' => 'dark',
            'content' => 'Elektriskais seglu skapis zirgu stallim',
            'span' => '',
            'info' => 'ar individuālu piegādes cenu',
            'source' => 'tikai uz electra.hussaria.pl',
        ],
        'include' => [
            'intro_products' => 'Iegādājoties Elektriskais seglu skapis zirgu stallim, jūs to saņemat arī bez maksas',
            'products' => [
                'battery' => [
                    'active' => 1,
                    'name' => 'Akumulators',
                    'desc' => 'Jauda: 4 Ah',
                    'image' => 'battery.png',
                ],
                'charger' => [
                    'active' => 1,
                    'name' => 'Lādētājs',
                    'desc' => 'akumulatoram',
                    'image' => 'charger.png',
                ],
                'pomp' => [
                    'active' => 1,
                    'name' => 'Elektriskais pumpis',
                    'desc' => 'ar powerbank funkciju',
                    'image' => 'pomp.png',
                ],
                'pharmacy' => [
                    'active' => 1,
                    'name' => 'Pirmās palīdzības aptieciņa',
                    'desc' => 'Medicīnas komplekts',
                    'image' => 'pharmacy.png',
                ],
                'lock' => [
                    'active' => 1,
                    'name' => 'Aizslēgs ar kodu',
                    'desc' => 'Aizsargājošs sprādze',
                    'image' => 'lock.png',
                ],
                'powerbank' => [
                    'active' => 1,
                    'name' => 'Power Bank',
                    'desc' => 'Ar ātrās uzlādes funkciju',
                    'image' => 'powerbank.png',
                ],
                'cables' => [
                    'active' => 1,
                    'name' => 'Daudzfunkcionāli uzlādes kabeļi',
                    'desc' => '3in1 tālruņa uzlādes kabeļa komplekts',
                    'image' => 'cables.png',
                ],
                'gadgets' => [
                    'active' => 1,
                    'name' => 'Jāšanas piederumu komplekts',
                    'desc' => 'Auduma iepirkumu soma, stilīga beisbola cepure, taktiskās šķēres ar skrūvgriežu komplektu, termoskrūze, magnētiskā tāfeles ar piederumu komplektu.',
                    'image' => 'gadgets.png',
                ],
            ],
            

        ]
    ],
    // ==============
    'extra' => 'Piedāvājumā papildus produkti',
    'shipping' => 'individuāla cenu noteikšana',
    'shipping_info' => 'Piegādes izmaksas',
    'products' => [
        'promo_battery' => [
            'active' => 1,
            'name' => 'Akumulators',
            'desc' => '',
            'parameters' => [
                'name' => 'Jauda',
                'value' => '4 Ah',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'battery_4ah.png',
            'show_price' => 0,
            'price' => -1, // 225
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_charger' => [
            'active' => 1,
            'name' => 'Lādētājs',
            'desc' => '',
            'parameters' => [
                'name' => 'Akumulatori iekļauti',
                'value' => 'Nē',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'charger_4_5ah.png',
            'show_price' => 0,
            'price' => -1, // 130,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_ramp' => [
            'active' => 1,
            'name' => 'Saliekamā iekraušanas rampa',
            'desc' => '',
            'parameters' => [
                'name' => 'Max. slodze',
                'value' => '270 kg',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'ramp_270kg.png',
            'show_price' => 0,
            'price' => -1, // 355,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_battery5' => [
            'active' => 1,
            'name' => 'Akumulators',
            'desc' => '',
            'parameters' => [
                'name' => 'Jauda',
                'value' => '5 Ah',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'battery_4ah.png',
            'show_price' => 0,
            'price' => -1, // 250,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_cover' => [
            'active' => 1,
            'name' => 'Pārsegs',
            'desc' => '',
            'colors' => [
                'name' => 'Krāsa',
                'values' => [
                    'czarny' => '#111111',
                ],
            ],
            'colors' => [
                'name' => 'Krāsa',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Melna',
                        'image' => 'tack_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'tack_cover.png',
            'show_price' => 0,
            'price' => -1, // 475,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_cover_trap' => [
            'active' => 1,
            'name' => 'Rampas pārsegs',
            'desc' => '',
            'colors' => [
                'name' => 'Krāsa',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Melna',
                        'image' => 'ramp_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => '',
            'image' => 'ramp_cover.png',
            'show_price' => 0,
            'price' => -1, // 115,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_cap' => [
            'active' => 1,
            'name' => 'Beisbola cepure',
            'desc' => 'vieglā apkārtmēra regulēšana',
            'cta' => [
                'color' => '#f78da7',
                'icon' => '',
                'text' => 'Atklājiet, kas jauns kolekcijā',
                'anchor' => 'elite.hussaria.pl',
                'link' => 'https://elite.hussaria.pl/',
            ],
            'colors' => [
                'name' => 'Krāsa',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Melna',
                        'image' => 'cap_black.png',
                        'color' => '#2d2a2e',
                    ],
                    'pink' => [
                        'default' => 0,
                        'title' => 'Rozā',
                        'image' => 'cap_pink.png',
                        'color' => '#ffc0cb',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => 'Tūlītēja piegāde iespējama',
            'image' => 'cap.png',
            'show_price' => 0,
            'price' => -1, // 25,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        'promo_thermo_cup' => [
            'active' => 1,
            'name' => 'Termokrūze',
            'desc' => 'ar personalizācijas iespēju',
            'parameters' => [
                'name' => 'Tilpums ',
                'value' => '1000 ml',
            ],
            'status' => 'Cena pēc vienošanās',
            'delivery' => 'Tūlītēja piegāde iespējama',
            'image' => 'thermo_cup.png',
            'show_price' => 0,
            'price' => -1, // 35,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => -1,
                'class' => '',
                'content' => 'Piegāde no',
            ],
        ],
        
    ],
    // ======== Confirm/Success page ========
    'success' => [
        'title' => 'Apstiprinājums ⚡ Elektriskais seglu skapis zirgu stallim 🔋 Hussaria Electra 🚀',
        'header' => 'Paldies par pasūtījuma veikšanu!',
        'content' => 'Jūsu pasūtījums ir pieņemts. Mēs nosūtījām jums apstiprinājumu pa e-pastu.',
        'button' => 'atgriezties pie Konfigurētājs'
    ],
    'cancel' => [
        'title' => 'Atcelts maksājums ⚡ Elektriskais seglu skapis zirgu stallim 🔋 Hussaria Electra 🚀',
        'header' => 'Maksājums ir atcelts vai pārtraukts.',
        'button' => 'atgriezties pie Konfigurētājs'
    ]
];