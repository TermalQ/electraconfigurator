<?php
return [
    'subject' => [
        'admin' => 'New order [ENG] - Hussaria Electra',
        'client' => 'Order confirmation - Hussaria Electra',
    ],
    'content' => [
        'title' => 'Order confirmation',
        'header' => [
            'hello' => 'Hello',
            'shop' => 'in the Hussaria Electra stable!',
            'intro' => 'Thank you for choosing the ELECTRIC TACK LOCKER and for completing the form. Below you\'ll find the details of your order. We\'ll contact you shortly to guide you through the next stage of the ordering process.'
        ],
        'summary' => [
            'table' => [
                'header' => [
                    'title' => 'Order details',
                    'date' => 'Date'
                ],
                'rows' => [
                    'total' => 'Order amount',
                    'name' => 'First Name/Company',
                    'lastname' => 'Last Name/Tax Identification',
                    'email' => 'E-mail',
                    'phone' => 'Phone',
                    'order' => 'Order',
                    'extra' => 'Additionally'
                ]                
            ]
        ],
        'helper' => [
            'head' => 'Have any questions? Contact us',
            'content' => 'Please note that with your purchase you not only receive the highest quality equipment, but also the full support of our team.',
            'info' => 'We are here to help with any questions or technical assistance needed. We are available Monday to Friday from 7:00 a.m. to 3:00 p.m.'
        ], 
    ],
    'footer' => [
        'link' => 'https://electra.hussaria.pl/',
        'copyright' => '© 2025 electra.hussaria.pl'
    ],
    'notifications' => [
        'success' => [
            'send' => 'Thank you! Your order has been submitted for processing. Our team will contact you soon.'
        ],
        'errors' => [
            'disabled' => 'Ordering by e-mail is disabled!',
            'validate' => 'The form contains invalid/empty fields',
            'send' => 'Error sending the form',
            'empty' => 'No products in shoping Cart',
            'fields' => [
                'empty' => [
                    'name' => 'Field is required',
                    'lastname' => 'Field is required',
                    'email' => 'Email is required',
                    'phone' => 'Phone number is required',
                    'agree' => 'You must accept the regulations',
                    'accept' => 'You must accept the terms',
                ],
                'incorect' => [
                    'email' => 'Incorrect email address format',
                    'phone' => 'Incorrect phone number format [9-15 characters]',
                    'browser' => 'Unauthorized user',
                    'timer' => 'The form was resubmitted too fast. Please wait a few minutes.',
                    'trying' => 'Too many attempts to send the form'
                ]
            ]
        ],
    ]
];