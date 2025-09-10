<?php
return [
    'subject' => [
        'admin' => 'Zamówienie [DE] - Hussaria Electra',
        'client' => 'Auftragsbestätigung - Hussaria Electra',
    ],
    'content' => [
        'title' => 'Auftragsbestätigung',
        'header' => [
            'hello' => 'Hallo',
            'shop' => 'in der Hussaria Electra!',
            'intro' => 'Vielen Dank, dass Sie sich für das ELEKTRISCHE SATTELSCHRANK entschieden und das Formular ausgefüllt haben. Im Folgenden finden Sie die Einzelheiten zu Ihrer Bestellung. Wir werden uns in Kürze mit Ihnen in Verbindung setzen, um Sie durch den nächsten Schritt Ihrer Bestellung zu führen.'
        ],
        'summary' => [
            'table' => [
                'header' => [
                    'title' => 'Bestelldetails',
                    'date' => 'Tag'
                ],
                'rows' => [
                    'total' => 'Bestellsumme',
                    'name' => 'Vorname/Firmenname',
                    'lastname' => 'Nachname/USt-IdNr.',
                    'email' => 'E-mail',
                    'phone' => 'Tel',
                    'order' => 'Bestellung',
                    'extra' => 'Zusätzlich'
                ]
            ]
        ],
        'helper' => [
            'head' => 'Haben Sie Fragen? Kontaktieren Sie uns',
            'content' => 'Bitte beachten Sie, dass Sie mit dem Kauf nicht nur hochwertige Ausrüstung erhalten, sondern auch umfassende Unterstützung durch unser Team.',
            'info' => 'Wir stehen Ihnen zur Verfügung, um Ihnen bei Fragen oder technischen Problemen zu helfen. Wir sind von Montag bis Freitag von 7:00 bis 15:00 Uhr erreichbar.'
        ],
    ],
    'footer' => [
        'link' => 'https://electra.hussaria.pl/',
        'copyright' => '© 2025 electra.hussaria.pl'
    ],
    'notifications' => [
        'success' => [
            'send' => 'Vielen Dank! Ihre Bestellung wurde zur Bearbeitung übergeben. Unser Team wird sich in Kürze mit Ihnen in Verbindung setzen.'
        ],
        'errors' => [
            'disabled' => 'Die Bestellung per E-Mail ist deaktiviert!',
            'validate' => 'Das Formular enthält ungültige/leere Felder',
            'send' => 'Fehler beim Senden des Formulars',
            'empty' => 'Dein Korb ist leer',
            'fields' => [
                'empty' => [
                    'name' => 'Das Feld ist erforderlich',
                    'lastname' => 'Das Feld ist erforderlich',
                    'email' => 'E-Mail ist erforderlich',
                    'phone' => 'Telefonnummer ist erforderlich',
                    'agree' => 'Die Geschäftsbedingungen müssen akzeptiert werden',
                    'accept' => 'Die Bedingungen müssen akzeptiert werden'
                ],
                'incorect' => [
                    'email' => 'Falsches E-Mail-Adressformat',
                    'phone' => 'Falsches Format der Telefonnummer [9-15 Zeichen]',
                    'browser' => 'Nicht autorisierter Benutzer',
                    'timer' => 'Das Formular wurde zu schnell erneut gesendet. Bitte warten Sie einige Minuten.',
                    'trying' => 'Zu viele Versuche, das Formular zu senden. Bitte warten Sie einige Minuten.',
                ]
            ]
        ]
    ]
];