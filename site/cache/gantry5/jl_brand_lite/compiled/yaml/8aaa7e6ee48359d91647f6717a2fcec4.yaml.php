<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/media/gantry5/engines/nucleus/particles/totop.yaml',
    'modified' => 1701870135,
    'data' => [
        'name' => 'To Top',
        'description' => 'Scroll back to top.',
        'type' => 'particle',
        'icon' => 'fa-chevron-up',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to top particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => 'totop'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'A Font Awesome icon to be displayed for the link.'
                ],
                'content' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'The text to be displayed for the link. HTML is allowed.',
                    'placeholder' => 'To Top'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'The title to be applied on the link. If no title is set here but a text is defined above, the text is used automatically for the <code>title</code>.',
                    'placeholder' => 'jump to top'
                ]
            ]
        ]
    ]
];
