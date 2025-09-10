<?php
return [
    'subject' => [
        'admin' => 'Zamówienie [FR] - Hussaria Electra',
        'client' => 'Confirmation de commande - Hussaria Electra',
    ],
    'content' => [
        'title' => 'Confirmation de commande',
        'header' => [
            'hello' => 'Bonjour',
            'shop' => 'dans la boutique Hussaria Electra!',
            'intro' => 'Merci d\'avoir choisi le ÉLECTRIQUE MALLE CONCOURS et d\'avoir rempli le formulaire. Vous trouverez ci-dessous les détails de votre commande. Nous vous contacterons bientôt pour vous guider à travers la prochaine étape de la commande.'
        ],
        'summary' => [
            'table' => [
                'header' => [
                    'title' => 'Détails de la commande',
                    'date' => 'Date'
                ],
                'rows' => [
                    'total' => 'Montant de la commande',
                    'name' => 'Prénom/Nom de l\'entreprise',
                    'lastname' => 'Nom de famille/NIP',
                    'email' => 'E-mail',
                    'phone' => 'Tel',
                    'order' => 'Commande',
                    'extra' => 'Supplémentaire'
                ]
            ]
        ],
        'helper' => [
            'head' => 'Vous avez des questions? Contactez-nous',
            'content' => 'Veuillez noter qu\'avec votre achat, vous bénéficiez non seulement d\'un équipement de la plus haute qualité, mais également d\'un soutien complet de notre équipe.',
            'info' => 'Nous restons à votre disposition pour toute question ou besoin d\'assistance technique. Nous sommes disponibles du lundi au vendredi de 7h00 à 15h00.'
        ],
    ],
    'footer' => [
        'link' => 'https://electra.hussaria.pl/',
        'copyright' => '© 2025 electra.hussaria.pl'
    ],
    'notifications' => [
        'success' => [
            'send' => 'Merci! Votre commande a été transmise pour traitement. Notre équipe vous contactera bientôt.'
        ],
        'errors' => [
            'disabled' => 'La commande par e-mail est désactivée!',
            'validate' => 'Le formulaire contient des champs invalides ou vides',
            'send' => 'Erreur lors de l\'envoi du formulaire',
            'empty' => 'Aucun produit dans le panier',
            'fields' => [
                'empty' => [
                    'name' => 'Le champ est requis',
                    'lastname' => 'Le champ est requis',
                    'email' => 'E-mail est requis',
                    'phone' => 'Numéro de téléphone est requis',
                    'agree' => 'Vous devez accepter les termes et conditions',
                    'accept' => 'Vous devez accepter les conditions'
                ],
                'incorect' => [
                    'email' => 'Format d\'adresse e-mail invalide',
                    'phone' => 'Format de numéro de téléphone invalide [9-15 caractères]',
                    'browser' => 'Utilisateur non autorisé',
                    'timer' => 'Le formulaire a été soumis trop rapidement. Veuillez attendre quelques minutes.',
                    'trying' => 'Trop de tentatives d\'envoi du formulaire. Veuillez attendre quelques minutes.',
                ]
            ]
        ]
    ]
];