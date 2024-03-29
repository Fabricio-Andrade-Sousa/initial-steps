<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/media/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/system.yaml',
    'modified' => 1701870135,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'System inheritance tab',
        'type' => 'system.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the particle properties',
                    'default' => 'inherit',
                    'options' => [
                        'clone' => 'Clone',
                        'inherit' => 'Inherit'
                    ]
                ],
                'outline' => [
                    'type' => 'gantry.outlines',
                    'label' => 'Outline',
                    'description' => 'Outline to inherit from.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'No Inheritance'
                    ]
                ],
                'particle' => [
                    'type' => 'gantry.particles',
                    'id' => 'g-inherit-particle',
                    'outline_field' => 'outline',
                    'label' => 'Position Instance',
                    'description' => 'Position to inherit from'
                ],
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Position to inherit?',
                    'options' => [
                        'attributes' => 'Position Attributes',
                        'block' => 'Block Attributes'
                    ]
                ]
            ]
        ]
    ]
];
