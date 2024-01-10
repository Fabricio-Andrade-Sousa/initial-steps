<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/blueprints/styles/font.yaml',
    'modified' => 1701870209,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Heebo, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'IBM Plex Sans, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
