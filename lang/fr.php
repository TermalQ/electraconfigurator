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
        'theme' => 'Changer de thème',
        'currency' => 'EUR',
        'delivery' => [
            'pack' => [
                'type' => 'text',
                'value' => 'tarification individuelle',
                'help' => '',   // extra info np: darmowa dostawa od zamówienia 300zł
                'free' => '',  // darmowy po przekroczeniu wartości zamówienia
            ],
            'products' => [
                'type' => 'text',
                'value' => 'tarification individuelle',
                'help' => '',
                'free' => '',
            ]
        ],
        'discount' => [
            'name' => 'Rabais',
            'value' => 0,
        ],
        'fees' => [
            'name' => 'Frais',
            'value' => 0,
        ]
    ],

    'title' => 'Configurateur ⚡ Malle de concours électrique 🔋 Hussaria Electra 🚀',
    'header' => 'Formulaire de commande',
    'helper' => 'Configurez votre Malle de concours électrique et soumettez le formulaire, nous vous contacterons et vous guiderons dans la prochaine étape de la commande 😊',
    'form' => [
        'colors' => [
            'title' => 'Couleur',
            'fields' => [
                'label' => 'Couleur',
                'help' => 'Choisissez une couleur',
                'info' => 'Palette de couleurs disponible pour changer la couleur de la malle',
            ],
        ],
        'marker' => [
            'title' => 'Personnalisation',
            'fields' => [
                'label' => 'Personnalisation',
                'help' => 'Choisissez une option',
                'info' => 'Options de personnalisation disponibles pour la malle',
                'holder' => 'Texte'
            ],
            'options' => [
                'grawer' => [
                    'title' =>'Gravure',
                    'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => '',
                    ],
                ],
                'texts' => [
                    'title' =>'Texte',
                    'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => '',
                    ],
                ],
            ],
            'tools' => [
                'font-color' => 'Couleur',
                'font-align' => 'Alignement',
                'font-style' => 'Style',
                'font-size' => 'Taille',
                'font-family' => 'Fonte',

            ],
            'flag' => [
                'title' => 'Drapeau',
                'fields' => [
                    'label' => 'Drapeau',
                    'holder' => 'Entrez le nom du pays',
                    'info' => '',
                    'warning' => 'Entrez le nom du pays (ou code: USA, PL, FR, UK, etc.)'
                ],
                'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => ''
                    ],
            ]
        ],
        'info' => [
            'send-pdf' => 'Envoyez des fichiers graphiques supplémentaires au format PDF à l\'adresse',
            'send-mail' => 'biuro@hussaria.pl'
        ],
        'buttons' => [
            'save' => 'Enregistrer la configuration',
            'cart' => 'Panier',
            'add' => 'Ajouter au panier',
            'view' => 'Voir le panier',
            'submit' => 'Soumettre le formulaire',
            'delete' => 'Supprimer'
        ],
        'cart' => [
            'product-image' => 'Photo',
            'product-name' => 'Nom',
            'product-quantity' => 'Quantité',
            'product-total' => 'Total',
        ],
        'errors' => [
            'add-product' => 'Erreur: Impossible d\'ajouter le produit au panier!',
            'del-product' => 'Erreur: Impossible de supprimer le produit du panier!',
        ],
        'notification' => [
            'add-package' => 'Produit ajouté au panier',
            'update-package' => 'Configuration mise à jour avec succès',
        ],
        
        // ========================

        'person' => [
            'title' => 'Données personnelles',
            'fields' => [
                'first_name' => 'Prénom/Nom de l\'entreprise',
                'last_name' => 'Nom/N° de TVA',
                'email' => 'E-mail',
                'phone' => 'Téléphone',
                'address' => 'Adresse',
                'city' => 'Ville',
                'post_code' => 'Code postal',
                'country' => 'Pays',
            ],
        ],
        'payments' => [
            'title' => 'Sélectionnez le mode de paiement',
        ],
        'order' => [
            'title' => 'Commande',
            'accept' => [
                'title' => 'J\'accepte le traitement des données personnelles saisies dans le formulaire afin de répondre à la demande soumise conformément à',
                'name' => 'Politique de confidentialité',
                'link' => 'https://electra.hussaria.pl/content/17-polityka-prywatnosci',
            ],
            'agree' => [
                'title' => 'J\'accepte',
                'name' => 'règlement',
                'link' => 'https://electra.hussaria.pl/pl/content/16-regulamin',
                'shop' => 'une boutique en ligne'
            ]
        ],
        'order_summary' => [
            'value' => 'Valeur de la commande',
            'cost' => 'Coût de la livraison',
            'amount' => 'Total',
            'back' => 'Retour',
            'notification' => 'Produit ajouté!',
            'confirm' => 'Merci pour votre commande!',
        ]
    ],
    
    //===============
    'package' => [
        'active' => 1,
        'name' => 'Malle de concours électrique',
        'desc' => 'Malle de concours électrique - commandez une malle personnalisée avec entraînement électrique. Idéal pour le stockage des selles et du matériel équestre. Équipée de grandes roues et d\'un entraînement électrique, elle offre confort, maniabilité et élimine l\'effort physique. Un excellent choix pour les compétiteurs et les passionnés d\'équitation.',
        'keywords' => 'hussaria electra, malle électrique, malle avec entraînement électrique',
        'thumb' => 'he_thumb_elektryczna_paka.png',
        'schema' => [
            'name' => 'Malle de concours électrique',
            'image' => 'elektryczna_paka_jezdziecka_he.jpg',
            'currency' => 'EUR',
            'desc' => 'Malle avec entraînement électrique pour le transport de matériel équestre',
            'brand' => 'Hussaria Electra'
        ],
        'status' => 'prix négociable',
        'deadline' => 'Lorsque le produit n\'est pas en stock, le délai de livraison est prolongé à 3-4 semaines',

        'show_price' => 1,
        'price' => 8487, // 8487,
        'promo' => '', // Cena promocyjna
        'shipping' => [
            'active' => 1,
            'content' => 'Malle de concours électrique',
            'span' => '',
            'info' => 'devis de livraison individuel',
            'source' => 'electra.hussaria.pl'
        ],
        'include' => [
            'intro_products' => 'En commandant la malle concours électrique, vous recevez gratuitement',
            'products' => [
                'battery' => [
                    'active' => 1,
                    'name' => 'Batterie',
                    'desc' => 'Capacité: 4 Ah',
                    'image' => 'battery.png',
                ],
                'charger' => [
                    'active' => 1,
                    'name' => 'Chargeur',
                    'desc' => 'Pour batterie',
                    'image' => 'charger.png',
                ],
                'pomp' => [
                    'active' => 1,
                    'name' => 'Pompe électrique',
                    'desc' => 'avec fonction Powerbank',
                    'image' => 'pomp.png',
                ],
                'pharmacy' => [
                    'active' => 1,
                    'name' => 'Trousse de Secours',
                    'desc' => 'Trousse médicale',
                    'image' => 'pharmacy.png',
                ],
                'lock' => [
                    'active' => 1,
                    'name' => 'Cadenas à code',
                    'desc' => 'Verrou de sécurité',
                    'image' => 'lock.png',
                ],
                'powerbank' => [
                    'active' => 1,
                    'name' => 'PowerBank',
                    'desc' => 'Avec fonction de charge rapide',
                    'image' => 'powerbank.png',
                ],
                'cables' => [
                    'active' => 1,
                    'name' => 'Kit de câbles',
                    'desc' => 'Kit de câbles de chargement de téléphone 3 en 1',
                    'image' => 'cables.png',
                ],
                'gadgets' => [
                    'active' => 1,
                    'name' => 'Kit de gadgets',
                    'desc' => 'Sac en matériau, casquette stylée, ciseaux tactiques avec un ensemble de tournevis, tasse thermique, tableau magnétique effaçable à sec avec un ensemble d\'accessoires',
                    'image' => 'gadgets.png',
                ],
            ],
            

        ]
    ],
    // ==============
    'extra' => 'En plus dans l\'offre',
    'products' => [
        'promo_battery' => [
            'active' => 1,
            'name' => 'Batterie',
            'desc' => '',
            'parameters' => [
                'name' => 'Capacité',
                'value' => '4 Ah',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'battery_4ah.png',
            'show_price' => 1, // 1,
            'price' => 225, // 225,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_charger' => [
            'active' => 1,
            'name' => 'Chargeur de batterie',
            'desc' => '',
            'parameters' => [
                'name' => 'Batteries incluses',
                'value' => 'Non',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'charger_4_5ah.png',
            'show_price' => 1, // 1,
            'price' => 130, // 130,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_ramp' => [
            'active' => 1,
            'name' => 'Rampe de chargement pliable',
            'desc' => '',
            'parameters' => [
                'name' => 'Charge max.',
                'value' => '270 kg',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'ramp_270kg.png',
            'show_price' => 1, // 1,
            'price' => 355, // 355,
            'shipping' => [
                'active' => 0,
                'free' => 0,
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
                'name' => 'Capacité',
                'value' => '5 Ah',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'battery_4ah.png',
            'show_price' => 1, // 1,
            'price' => 250, // 250,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cover' => [
            'active' => 1,
            'name' => 'Housse de malle',
            'desc' => '',
            'colors' => [
                'name' => 'Couleur',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Noire',
                        'image' => 'tack_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'tack_cover.png',
            'show_price' => 1, // 1,
            'price' => 475, // 475,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cover_trap' => [
            'active' => 1,
            'name' => 'Housse pour rampe',
            'desc' => '',
            'colors' => [
                'name' => 'Couleur',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Noire',
                        'image' => 'ramp_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'ramp_cover.png',
            'show_price' => 1, // 1,
            'price' => 115, // 115,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_cap' => [
            'active' => 1,
            'name' => 'Casquette',
            'desc' => 'réglage facile de la circonférence',
            'cta' => [
                'color' => '#f78da7',
                'icon' => '',
                'text' => 'Découvrez les nouveautés',
                'anchor' => 'elite.hussaria.pl',
                'link' => 'https://elite.hussaria.pl/',
            ],
            'colors' => [
                'name' => 'Couleur',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Noire',
                        'image' => 'cap_black.png',
                        'color' => '#2d2a2e',
                    ],
                    'pink' => [
                        'default' => 0,
                        'title' => 'Rose',
                        'image' => 'cap_pink.png',
                        'color' => '#ffc0cb',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
            'image' => 'cap.png',
            'show_price' => 1, // 1,
            'price' => 25, //25,
            'shipping' => [
                'active' => 0,
                'free' => 0,
                'price' => 0,
                'class' => '',
                'content' => '',
            ],
        ],
        'promo_thermo_cup' => [
            'active' => 1,
            'name' => 'Tasse isotherme',
            'desc' => 'avec possibilité de personnalisation',
            'parameters' => [
                'name' => 'Capacité',
                'value' => '1000 ml',
            ],
            'status' => 'En stock',
            'delivery' => 'Livraison immédiate possible',
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
        'title' => 'Confirmation ⚡ Malle de concours électrique 🔋 Hussaria Electra 🚀',
        'header' => 'Merci d\'avoir passé votre commande !',
        'content' => 'Votre commande a été acceptée. Nous vous avons envoyé une confirmation par e-mail.',
        'button' => 'retour au Configurateur'
    ],
    'cancel' => [
        'title' => 'Paiement annulé ⚡ Malle de concours électrique 🔋 Hussaria Electra 🚀',
        'header' => 'Le paiement a été annulé ou interrompu.',
        'button' => 'retour au Configurateur'
    ]
];