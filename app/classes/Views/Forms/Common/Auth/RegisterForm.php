<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'fields' => [
                'name' => [
                    'label' => 'First Name *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_no_spec_chars',
                        'validate_not_numeric',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your first name',
                        ]
                    ]
                ],
                'surname' => [
                    'label' => 'Last Name *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_no_spec_chars',
                        'validate_not_numeric',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your last name',
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'Email *',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                        'validate_user_unique',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your email',
                        ]
                    ]
                ],
                'phone' => [
                    'label' => 'Phone Number',
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your phone number',
                        ]
                    ]
                ],
                'address' => [
                    'label' => 'Address',
                    'type' => 'text',
                    'validators' => [
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your address',
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password *',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your password',
                         ]
                    ]
                ],
                'password_repeat' => [
                    'label' => 'Password Repeat *',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Repeat your password',
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'register' => [
                    'title' => 'Register',
                ]
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ]
        ]
    );

    }
}