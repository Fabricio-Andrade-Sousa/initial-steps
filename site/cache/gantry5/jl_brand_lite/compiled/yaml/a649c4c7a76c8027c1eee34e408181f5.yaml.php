<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/media/gantry5/engines/nucleus/particles/frameworks.yaml',
    'modified' => 1701870135,
    'data' => [
        'name' => 'JavaScript Frameworks',
        'description' => 'Loads selected frameworks for the page.',
        'type' => 'atom',
        'icon' => 'far fa-file-code',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Frameworks atom.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<strong>TIP</strong>: Only enable following frameworks if you need them in your own particles or your content.'
                ],
                'jquery' => [
                    'type' => 'container.set',
                    'label' => 'jQuery',
                    'fields' => [
                        '.enabled' => [
                            'type' => 'enable.enable',
                            'label' => 'Framework',
                            'default' => 0
                        ],
                        '.ui_core' => [
                            'type' => 'enable.enable',
                            'label' => 'UI Core',
                            'default' => 0
                        ],
                        '.ui_sortable' => [
                            'type' => 'enable.enable',
                            'label' => 'UI Sortable',
                            'default' => 0
                        ]
                    ]
                ],
                'bootstrap' => [
                    'type' => 'container.set',
                    'label' => 'Bootstrap',
                    'fields' => [
                        '.enabled' => [
                            'type' => 'enable.enable',
                            'label' => 'Framework',
                            'default' => 0
                        ]
                    ]
                ],
                'mootools' => [
                    'label' => 'Mootools',
                    'type' => 'container.set',
                    'fields' => [
                        '.enabled' => [
                            'type' => 'enable.enable',
                            'label' => 'Framework',
                            'default' => 0
                        ],
                        '.more' => [
                            'type' => 'enable.enable',
                            'label' => 'Mootools More',
                            'default' => 0
                        ]
                    ]
                ]
            ]
        ]
    ]
];
