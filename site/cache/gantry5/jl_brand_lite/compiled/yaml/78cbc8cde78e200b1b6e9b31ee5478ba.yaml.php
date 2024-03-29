<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/media/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/section.yaml',
    'modified' => 1701870135,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Section inheritance tab',
        'type' => 'section.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the section properties. <code>inherit</code> makes the Section identical to that of the inherited outline.',
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
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Section to inherit?',
                    'options' => [
                        'attributes' => 'Section Attributes',
                        'block' => 'Block Attributes',
                        'children' => 'Particles within Section'
                    ]
                ]
            ]
        ]
    ]
];
