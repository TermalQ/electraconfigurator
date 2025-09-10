<?php
return [
    'subject' => [
        'admin' => 'Zamówienie [ES] - Hussaria Electra',
        'client' => 'Confirmación del pedido - Hussaria Electra',
    ],
    'content' => [
        'title' => 'Confirmación del pedido',
        'header' => [
            'hello' => 'Hola',
            'shop' => 'en la tienda Hussaria Electra!',
            'intro' => 'Gracias por elegir el BAÚL ECUESTRE ELÉCTRICO y completar el formulario. A continuación, encontrará los detalles de su pedido. Nos pondremos en contacto con usted pronto para guiarlo a través de la siguiente etapa del pedido.'
        ],
        'summary' => [
            'table' => [
                'header' => [
                    'title' => 'Detalles del pedido',
                    'date' => 'Día'
                ],
                'rows' => [
                    'total' => 'Total del pedido',
                    'name' => 'Nombre/Nombre de la empresa',
                    'lastname' => 'Apellido/Número NIP',
                    'email' => 'E-mail',
                    'phone' => 'Teléfono',
                    'order' => 'Pedido',
                    'extra' => 'Adicional'
                ]
            ]
        ],
        'helper' => [
            'head' => '¿Tienes alguna pregunta? Contáctanos',
            'content' => 'Recuerda que con tu compra recibes no sólo equipos de la más alta calidad, sino también todo el soporte de nuestro equipo.',
            'info' => 'Quedamos a su disposición para ayudarle con cualquier duda o necesidad de soporte técnico. Estamos disponibles de lunes a viernes de 7:00 a.m. a 3:00 p.m.'
        ], 
    ],
    'footer' => [
        'link' => 'https://electra.hussaria.pl/?lang=es',
        'copyright' => '© 2025 electra.hussaria.pl'
    ],
    'notifications' => [
        'success' => [
            'send' => '¡Gracias! Su pedido ha sido procesado Nuestro equipo se pondrá en contacto contigo en breve.'
        ],
        'errors' => [
            'disabled' => '¡Los pedidos por correo electrónico están deshabilitados!',
            'validate' => 'El formulario contiene campos inválidos o vacíos',
            'send' => 'Error al enviar el formulario',
            'empty' => 'No hay productos en el carrito',
            'fields' => [
                'empty' => [
                    'name' => 'El campo es obligatorio',
                    'lastname' => 'El campo es obligatorio',
                    'email' => 'El correo electrónico es obligatorio',
                    'phone' => 'El número de teléfono es obligatorio',
                    'agree' => 'Debe aceptar los términos y condiciones',
                    'accept' => 'Debe aceptar los términos y condiciones'
                ],
                'incorect' => [
                    'email' => 'Formato de dirección de correo electrónico no válido',
                    'phone' => 'Formato de número de teléfono no válido [9-15 caracteres]',
                    'browser' => 'Usuario no autorizado',
                    'timer' => 'El formulario se ha enviado demasiado rápido. Espere un par de minutos.',
                    'trying' => 'Demasiados intentos de envío del formulario'
                ]
            ]
        ]
    ]
];