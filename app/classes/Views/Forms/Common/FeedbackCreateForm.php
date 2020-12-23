<?php


namespace App\Views\Forms\Common;


use Core\Views\Form;

class FeedbackCreateForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'text' => [
                    'label' => 'Write us',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_char_length' => [
                            'min' => 1,
                            'max' => 500
                        ]
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your message...',
                        ],
                    ],
                ],
            ],
        ]);

        $this->data['attr']['id'] = 'feedback-create-form';
        $this->data['buttons']['create'] = [
            'title' => 'Submit',
        ];
    }
}