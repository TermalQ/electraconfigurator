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
        'theme' => 'Design ändern',
        'currency' => 'EUR',
        'delivery' => [
            'pack' => [
                'type' => 'text',
                'value' => 'individuelle Preisgestaltung',
                'help' => '',   // extra info np: darmowa dostawa od zamówienia 300zł
                'free' => '',  // darmowy po przekroczeniu wartości zamówienia
            ],
            'products' => [
                'type' => 'text',
                'value' => 'individuelle Preisgestaltung',
                'help' => '',
                'free' => '',
            ]
        ],
        'discount' => [
            'name' => 'Rabatt',
            'value' => 0,
        ],
        'fees' => [
            'name' => 'Gebühren',
            'value' => 0,
        ]
    ],

    'title' => 'Konfigurator ⚡ Elektrischer Turnierschrank 🔋 Hussaria Electra 🚀',
    'header' => 'Bestellformular',
    'helper' => 'Konfigurieren Sie Ihren ELEKTRISCHEN TURNIERSCHRANK und senden Sie das Formular ab, damit wir Sie kontaktieren und durch den nächsten Schritt des Bestellvorgangs führen können 😊',
    'form' => [
        'colors' => [
            'title' => 'Farbe',
            'fields' => [
                'label' => 'Farbe',
                'help' => 'Wählen Sie eine Farbe',
                'info' => 'Verfügbare Farbpalette zur Änderung der Farbe',
            ],
        ],
        'marker' => [
            'title' => 'Personalisierung',
            'fields' => [
                'label' => 'Personalisierung',
                'help' => 'Wählen Sie Optionen',
                'info' => 'Verfügbare Optionen zur Personalisierung',
                'holder' => 'Text'
            ],
            'options' => [
                'grawer' => [
                    'title' =>'Gravur',
                    'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => '',
                    ],
                ],
                'texts' => [
                    'title' =>'Text',
                    'price' => [
                        'show' => 0,
                        'value' => 0, // Zapytaj o wycenę
                        'promo' => '',
                    ],
                ],
            ],
            'tools' => [
                'font-color' => 'Farbe',
                'font-align' => 'Ausrichtung',
                'font-style' => 'Formatierung',
                'font-size' => 'Größe',
                'font-family' => 'Schriftart',

            ],
            'flag' => [
                'title' => 'Flagge',
                'fields' => [
                    'label' => 'Flagge',
                    'holder' => 'Geben Sie den Ländernamen ein',
                    'info' => '',
                    'warning' => 'Wählen Sie den Ländernamen (oder den Code: USA, PL, FR, UK usw.)'
                ],
                'price' => [
                        'show' => 0,
                        'value' => 0, // Zapytaj o wycenę -1
                        'promo' => ''
                    ],
            ]
        ],
        'info' => [
            'send-pdf' => 'Zusätzliche Grafikdateien im PDF-Format senden Sie bitte an',
            'send-mail' => 'biuro@hussaria.pl'
        ],
        'buttons' => [
            'save' => 'Konfiguration speichern',
            'cart' => 'Warenkorb',
            'add' => 'In den Warenkorb',
            'view' => 'Warenkorb anzeigen',
            'submit' => 'Formular absenden',
            'delete' => 'Löschen'
        ],
        'cart' => [
            'product-image' => 'Bild',
            'product-name' => 'Name',
            'product-quantity' => 'Menge',
            'product-total' => 'Summe',
        ],
        'errors' => [
            'add-product' => 'Fehler: Produkt konnte nicht zum Warenkorb hinzugefügt werden!',
            'del-product' => 'Fehler: Produkt konnte nicht aus dem Warenkorb entfernt werden!',
        ],
        'notification' => [
            'add-package' => 'Produkt wurde zum Warenkorb hinzugefügt',
            'update-package' => 'Konfiguration wurde erfolgreich aktualisiert',
        ],
        
        // ========================

        'person' => [
            'title' => 'personenbezogene Daten',
            'fields' => [
                'first_name' => 'Vorname/Firmenname',
                'last_name' => 'Nachname/USt-IdNr.',
                'email' => 'E-Mail',
                'phone' => 'Telefon',
                'address' => 'Adresse',
                'city' => 'Stadt',
                'post_code' => 'Postleitzahl',
                'country' => 'Land',
            ],
        ],
        'payments' => [
            'title' => 'Zahlungsmethode auswählen',
        ],
        'order' => [
            'title' => 'Bestellung',
            'accept' => [
                'title' => 'Ich bin mit der Verarbeitung meiner im Formular eingegebenen personenbezogenen Daten zur Beantwortung der Anfrage gemäß',
                'name' => 'Datenschutzbestimmungen',
                'link' => 'https://electra.hussaria.pl/content/17-polityka-prywatnosci',
            ],
            'agree' => [
                'title' => 'Akzeptiere die',
                'name' => 'Statut',
                'link' => 'https://electra.hussaria.pl/pl/content/16-regulamin',
                'shop' => 'Online-Shop'
            ]
        ],
        'order_summary' => [
            'value' => 'Wert der Bestellung',
            'cost' => 'Versandkosten',
            'amount' => 'Gesamt',
            'back' => 'Zurück',
            'notification' => 'Produkt wurde hinzugefügt!',
            'confirm' => 'Vielen Dank für Ihre Bestellung!',
        ]
    ],
    
    //===============
    'package' => [
        'active' => 1,
        'name' => 'Elektrischer Turnierschrank',
        'desc' => 'Elektrischer Turnierschrank - bestellen Sie eine personalisierte Box mit elektrischem Antrieb. Ideal zum Verstauen von Sätteln und Reitzubehör. Ausgestattet mit großen Rädern und elektrischem Antrieb, bietet sie Komfort, einfache Manövrierbarkeit und eliminiert körperliche Anstrengung. Eine ausgezeichnete Wahl für Reiter und Pferdeliebhaber.',
        'keywords' => 'Turnierschrank, Sattelbox auf Rollen, hussaria electra, elektrischer turnierschrank, box mit elektrischem antrieb',
        'thumb' => 'he_thumb_elektryczna_paka.png',
        'schema' => [
            'name' => 'Elektrische Sattelschrank',
            'image' => 'elektryczna_paka_jezdziecka_he.jpg',
            'currency' => 'EUR',
            'desc' => 'Sattelbox auf Rollen zum Transport von Reitzubehör',
            'brand' => 'Hussaria Electra'
        ],
        'status' => 'Preis verhandelbar',
        'deadline' => 'Wenn der Artikel nicht auf Lager ist, verlängert sich die Lieferzeit auf 3-4 Wochen',

        'show_price' => 1, // 1,
        'price' => 8487, // 8487,
        'promo' => '', // Cena promocyjna
        'shipping' => [
            'active' => 1,
            'content' => 'Elektrischer Turnierschrank',
            'span' => '',
            'info' => 'mit individuellem Lieferpreis'
        ],
        'include' => [
            'intro_products' => 'Beim Kauf eines Elektrischen Turnierschranks erhalten Sie diesen gratis',
            'products' => [
                'battery' => [
                    'active' => 1,
                    'name' => 'Batterie',
                    'desc' => 'Kapazität: 4 Ah',
                    'image' => 'battery.png',
                ],
                'charger' => [
                    'active' => 1,
                    'name' => 'Ladegerät',
                    'desc' => 'Für den Akku',
                    'image' => 'charger.png',
                ],
                'pomp' => [
                    'active' => 1,
                    'name' => 'Elektrische Pumpe',
                    'desc' => 'mit Powerbank-Funktion',
                    'image' => 'pomp.png',
                ],
                'pharmacy' => [
                    'active' => 1,
                    'name' => 'Erste-Hilfe-Kasten',
                    'desc' => 'Medizinische Ausrüstung',
                    'image' => 'pharmacy.png',
                ],
                'lock' => [
                    'active' => 1,
                    'name' => 'Kombinationsvorhängeschloss',
                    'desc' => 'Schutzverschluss',
                    'image' => 'lock.png',
                ],
                'powerbank' => [
                    'active' => 1,
                    'name' => 'PowerBank',
                    'desc' => 'Mit Schnellladefunktion',
                    'image' => 'powerbank.png',
                ],
                'cables' => [
                    'active' => 1,
                    'name' => 'Kabelsatz',
                    'desc' => '3in1 Handy-Ladekabel-Set',
                    'image' => 'cables.png',
                ],
                'gadgets' => [
                    'active' => 1,
                    'name' => 'Gadget-Set',
                    'desc' => 'Eine Einkaufstasche aus Stoff, eine stylische Baseballkappe, eine taktische Schere mit Schraubenzieher-Set, ein Thermosbecher, eine magnetische Trockenlöschtafel mit Zubehörset',
                    'image' => 'gadgets.png',
                ],
            ],
            

        ]
    ],
    // ==============
    'extra' => 'Zusätzlich im Angebot',
    'products' => [
        'promo_battery' => [
            'active' => 1,
            'name' => 'Batterie',
            'desc' => '',
            'parameters' => [
                'name' => 'Kapazität',
                'value' => '4 Ah',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'battery_4ah.png',
            'show_price' => 1, // 1,
            'price' => 225, // 225,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_charger' => [
            'active' => 1,
            'name' => 'Ladegerät',
            'desc' => '',
            'parameters' => [
                'name' => 'Batterie im Lieferumfang',
                'value' => 'Nein',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'charger_4_5ah.png',
            'show_price' => 1, // 1,
            'price' => 130, // 130,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_ramp' => [
            'active' => 1,
            'name' => 'Klappbare Laderampe',
            'desc' => '',
            'parameters' => [
                'name' => 'Max. Belastung',
                'value' => '270 kg',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'ramp_270kg.png',
            'show_price' => 1, // 1,
            'price' => 355, // 355,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_battery5' => [
            'active' => 1,
            'name' => 'Batterie',
            'desc' => '',
            'parameters' => [
                'name' => 'Kapazität',
                'value' => '5 Ah',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'battery_4ah.png',
            'show_price' => 1, // 1,
            'price' => 250, // 250,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cover' => [
            'active' => 1,
            'name' => 'Schutzhaube für Turnierschrank',
            'desc' => '',
            'colors' => [
                'name' => 'Farbe',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Schwarz',
                        'image' => 'tack_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'tack_cover.png',
            'show_price' => 1, // 1,
            'price' => 475, // 475,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cover_trap' => [
            'active' => 1,
            'name' => 'Schutzhaube für die Rampe',
            'desc' => '',
            'colors' => [
                'name' => 'Farbe',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Schwarz',
                        'image' => 'ramp_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'ramp_cover.png',
            'show_price' => 1, // 1,
            'price' => 115, // 115,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cap' => [
            'active' => 1,
            'name' => 'Kappe',
            'desc' => 'Einfache Größenanpassung',
            'cta' => [
                'color' => '#f78da7',
                'icon' => '',
                'text' => 'Entdecken Sie die Neuheiten der Kollektion',
                'anchor' => 'elite.hussaria.pl',
                'link' => 'https://elite.hussaria.pl/',
            ],
            'colors' => [
                'name' => 'Farbe',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Schwarz',
                        'image' => 'cap_black.png',
                        'color' => '#2d2a2e',
                    ],
                    'pink' => [
                        'default' => 0,
                        'title' => 'Rosa',
                        'image' => 'cap_pink.png',
                        'color' => '#ffc0cb',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'cap.png',
            'show_price' => 1, // 1,
            'price' => 25, // 25,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_thermo_cup' => [
            'active' => 1,
            'name' => 'Thermobecher',
            'desc' => 'mit Personalisierungsoption',
            'parameters' => [
                'name' => 'Kapazität',
                'value' => '1000 ml',
            ],
            'status' => 'Auf Lager',
            'delivery' => 'Sofortiger Versand möglich',
            'image' => 'thermo_cup.png',
            'show_price' => 1, // 1,
            'price' => 35, // 35,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
    ],
    // ======== Confirm/Success page ========
    'success' => [
        'title' => 'Konfirmation ⚡ Elektrischer Turnierschrank 🔋 Hussaria Electra 🚀',
        'header' => 'Vielen Dank für Ihre Bestellung!',
        'content' => 'Ihre Bestellung wurde angenommen. Wir haben Ihnen eine Bestätigung per E-Mail gesendet.',
        'button' => 'zurück zum Konfigurator'
    ],
    'cancel' => [
        'title' => 'Stornierte Zahlung ⚡ Elektrischer Turnierschrank 🔋 Hussaria Electra 🚀',
        'header' => 'Die Zahlung wurde storniert oder unterbrochen.',
        'button' => 'zurück zum Konfigurator'
    ]
];