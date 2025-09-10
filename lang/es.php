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
        'theme' => 'Cambiar tema',
        'currency' => 'EUR',
        'delivery' => [
            'pack' => [
                'type' => 'text',
                'value' => 'precios individuales',
                'help' => '',   // extra info np: darmowa dostawa od zamówienia 300zł
                'free' => '',  // darmowy po przekroczeniu wartości zamówienia
            ],
            'products' => [
                'type' => 'text',
                'value' => 'precios individuales',
                'help' => '',
                'free' => '',
            ]
        ],
        'discount' => [
            'name' => 'Descuento',
            'value' => 0,
        ],
        'fees' => [
            'name' => 'Cargos',
            'value' => 0,
        ]
    ],

    'title' => 'Configurador ⚡ Baúl ecuestre eléctrico 🔋 Hussaria Electra 🚀',
    'header' => 'Formulario de pedido',
    'helper' => 'Configura baúl ecuestre eléctrico y envía el formulario, nos pondremos en contacto contigo y te guiaremos en el siguiente paso de tu pedido 😊',
    'form' => [
        'colors' => [
            'title' => 'Color del baúl ecuestre',
            'fields' => [
                'label' => 'Color del baúl ecuestre',
                'help' => 'Selecciona un color',
                'info' => 'Paleta de colores disponible para cambiar el color del baúl',
            ],
        ],
        'marker' => [
            'title' => 'Personalización',
            'fields' => [
                'label' => 'Personalización',
                'help' => 'Selecciona opciones',
                'info' => 'Opciones de personalización disponibles para el baúl',
                'holder' => 'Texto de personalización',
            ],
            'options' => [
                'grawer' => [
                    'title' =>'Gravado',
                    'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => '',
                    ],
                ],
                'texts' => [
                    'title' =>'Texto',
                    'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => '',
                    ],
                ],
            ],
            'tools' => [
                'font-color' => 'Color',
                'font-align' => 'Alineación',
                'font-style' => 'Formato',
                'font-size' => 'Tamaño',
                'font-family' => 'Fuente',
                
            ],
            'flag' => [
                'title' => 'Bandera',
                'fields' => [
                    'label' => 'Bandera',
                    'holder' => 'Escribe el nombre del país',
                    'info' => '',
                    'warning' => 'Escribe el nombre del país (o código: USA, PL, FR, UK, etc.)'
                ],
                'price' => [
                        'show' => 0,
                        'value' => 0,
                        'promo' => ''
                    ],
            ]
        ],
        'info' => [
            'send-pdf' => 'Envíe archivos gráficos adicionales en formato PDF a la dirección',
            'send-mail' => 'biuro@hussaria.pl'
        ],
        'buttons' => [
            'save' => 'Guardar configuración',
            'cart' => 'Carrito',
            'add' => 'Agregar al carrito',
            'view' => 'Ver carrito',
            'submit' => 'Enviar formulario',
            'delete' => 'Eliminar'
        ],
        'cart' => [
            'product-image' => 'Imagen',
            'product-name' => 'Nombre',
            'product-quantity' => 'Cantidad',
            'product-total' => 'Total',
        ],
        'errors' => [
            'add-product' => 'Error: No se puede agregar el producto al carrito!',
            'del-product' => 'Error: No se puede eliminar el producto del carrito!',
        ],
        'notification' => [
            'add-package' => 'El producto ha sido añadido al carrito',
            'update-package' => 'La configuración ha sido actualizada con éxito',
        ],

        // ========================

        'person' => [
            'title' => 'Datos personales',
            'fields' => [
                'first_name' => 'Nombre/Nombre de la empresa',
                'last_name' => 'Apellido/Número NIP',
                'email' => 'E-mail',
                'phone' => 'Teléfono',
                'address' => 'Dirigirse',
                'city' => 'Ciudad',
                'post_code' => 'Código postal',
                'country' => 'País',
            ],
        ],
        'payments' => [
            'title' => 'Seleccione el método de pago',
        ],
        'order' => [
            'title' => 'Pedido',
            'accept' => [
                'title' => 'Acepto el procesamiento de los datos personales ingresados en el formulario con el fin de responder a la consulta enviada de acuerdo con',
                'name' => 'Política de Privacidad',
                'link' => 'https://electra.hussaria.pl/content/17-polityka-prywatnosci',
            ],
            'agree' => [
                'title' => 'Acepto',
                'name' => 'reglamento',
                'link' => 'https://electra.hussaria.pl/pl/content/16-regulamin',
                'shop' => 'de la tienda online'
            ]
        ],
        'order_summary' => [
            'value' => 'Valor del pedido',
            'cost' => 'Costo de envío',
            'amount' => 'Total',
            'back' => 'Volver',
            'notification' => '¡El producto ha sido añadido!',
            'confirm' => '¡Gracias por su pedido!',
        ]
    ],
    
    //===============
    'package' => [
        'active' => 1,
        'name' => 'Baúl ecuestre eléctrico',
        'desc' => 'Baúl ecuestre eléctrico - haz tu pedido personalizado con propulsión eléctrica. Es la solución ideal para guardar monturas y equipo ecuestre. Equipado con ruedas grandes y motor eléctrico, ofrece comodidad, facilidad de maniobra y elimina el esfuerzo físico. Una elección perfecta para jinetes y apasionados de la equitación.',
        'keywords' => 'hussaria electra, elektryczna paka, paka z napędem elektrycznym',
        'thumb' => 'he_thumb_elektryczna_paka.png',
        'schema' => [
            'name' => 'Baúl ecuestre eléctrico',
            'image' => 'elektryczna_paka_jezdziecka_he.jpg',
            'currency' => 'EUR',
            'desc' => 'Baúl ecuestre eléctrico para el transporte de equipo de equitación',
            'brand' => 'Hussaria Electra'
        ],
        'status' => 'precio a convenir',
        'deadline' => 'Si el producto no está en stock, el tiempo de entrega se extiende a 3-4 semanas',

        'show_price' => 1,
        'price' => 8487,
        'promo' => '', // Cena promocyjna
        'shipping' => [
            'active' => 1,
            'free' => 0,
            'price' => 'precios individuales',
            'promo' => '',
            'class' => 'dark',
            'content' => 'Baúl ecuestre eléctrico',
            'span' => '',
            'info' => 'con precio de envío individual',
            'source' => 'Sólo en electra.hussaria.pl',
        ],
        'include' => [
            'intro_products' => 'Al comprar el baúl ecuestre eléctrico, recibes gratis',
            'products' => [
                'battery' => [
                    'active' => 1,
                    'name' => 'Batería',
                    'desc' => 'Capacidad: 4 Ah',
                    'image' => 'battery.png',
                ],
                'charger' => [
                    'active' => 1,
                    'name' => 'Cargador',
                    'desc' => 'Para la batería',
                    'image' => 'charger.png',
                ],
                'pomp' => [
                    'active' => 1,
                    'name' => 'Bomba eléctrica',
                    'desc' => 'con función de Powerbank',
                    'image' => 'pomp.png',
                ],
                'pharmacy' => [
                    'active' => 1,
                    'name' => 'Botiquín',
                    'desc' => 'Kit de primeros auxilios',
                    'image' => 'pharmacy.png',
                ],
                'lock' => [
                    'active' => 1,
                    'name' => 'Candado de combinación',
                    'desc' => 'Cierre de seguridad',
                    'image' => 'lock.png',
                ],
                'powerbank' => [
                    'active' => 1,
                    'name' => 'PowerBank',
                    'desc' => 'Con función de carga rápida',
                    'image' => 'powerbank.png',
                ],
                'cables' => [
                    'active' => 1,
                    'name' => 'Juego de cables',
                    'desc' => 'Juego de cables para cargar el teléfono 3 en 1',
                    'image' => 'cables.png',
                ],
                'gadgets' => [
                    'active' => 1,
                    'name' => 'Juego de gadgets',
                    'desc' => 'Bolsa de compras de tela, gorra de béisbol elegante, tijeras tácticas con juego de destornilladores, taza térmica, pizarra magnética blanca con un conjunto de accesorios',
                    'image' => 'gadgets.png',
                ],
            ],
            

        ]
    ],
    // ==============
    'extra' => 'Adicionalmente en la oferta',
    'products' => [
        'promo_battery' => [
            'active' => 1,
            'name' => 'Batería',
            'desc' => '',
            'parameters' => [
                'name' => 'Capacidad',
                'value' => '4 Ah',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'battery_4ah.png',
            'show_price' => 1,
            'price' => 225,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => 'Entrega desde',
            ],
        ],
        'promo_charger' => [
            'active' => 1,
            'name' => 'Cargador de batería',
            'desc' => '',
            'parameters' => [
                'name' => 'Baterías incluidas',
                'value' => 'No',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'charger_4_5ah.png',
            'show_price' => 1,
            'price' => 130, // 130,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => 'Entrega desde',
            ],
        ],
        'promo_ramp' => [
            'active' => 1,
            'name' => 'Rampas de carga plegables',
            'desc' => '',
            'parameters' => [
                'name' => 'Carga máxima',
                'value' => '270 kg',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'ramp_270kg.png',
            'show_price' => 1,
            'price' => 355, // 355,
            'shipping' => [
                'active' => 0,
                'free' => 1,
                'price' => 0,
                'class' => '',
                'content' => 'Entrega desde',
            ],
        ],
        'promo_battery5' => [
            'active' => 1,
            'name' => 'Batería',
            'desc' => '',
            'parameters' => [
                'name' => 'Capacidad',
                'value' => '5 Ah',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'battery_4ah.png',
            'show_price' => 1,
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
            'name' => 'Cubierta',
            'desc' => '',
            'colors' => [
                'name' => 'Color',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Negro',
                        'image' => 'tack_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'tack_cover.png',
            'show_price' => 1,
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
            'name' => 'Cubierta para rampa',
            'desc' => '',
            'colors' => [
                'name' => 'Color',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Negro',
                        'image' => 'ramp_cover_black.png',
                        'color' => '#2d2a2e',
                    ]
                ],
            ],
            'parameters' => [
                'name' => '',
                'value' => '',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'ramp_cover.png',
            'show_price' => 1,
            'price' => 480, // 480,
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
            'name' => 'Gorra de béisbol',
            'desc' => 'fácil ajuste de tamaño',
            'cta' => [
                'color' => '#f78da7',
                'icon' => '',
                'text' => 'Descubre las novedades de la colección',
                'anchor' => 'elite.hussaria.pl',
                'link' => 'https://elite.hussaria.pl/',
            ],
            'colors' => [
                'name' => 'Color',
                'values' => [
                    'black' => [
                        'default' => 1,
                        'title' => 'Negro',
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
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'cap.png',
            'show_price' => 1,
            'price' => 25, // 25
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
            'name' => 'Taza térmica',
            'desc' => 'con posibilidad de personalización',
            'parameters' => [
                'name' => 'Capacidad',
                'value' => '1000 ml',
            ],
            'status' => 'Precio a convenir',
            'delivery' => '',
            'image' => 'thermo_cup.png',
            'show_price' => 1,
            'price' => 35, // 35
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
        'title' => 'Confirmación ⚡ Baúl ecuestre eléctrico 🔋 Hussaria Electra 🚀',
        'header' => '¡Gracias por realizar su pedido!',
        'content' => 'Su pedido ha sido aceptado. Le enviamos una confirmación por correo electrónico.',
        'button' => 'volver al Configurador'
    ],
    'cancel' => [
        'title' => 'Pago cancelado ⚡ Baúl ecuestre eléctrico 🔋 Hussaria Electra 🚀',
        'header' => 'El pago ha sido cancelado o interrumpido.',
        'button' => 'volver al Configurador'
    ]
];