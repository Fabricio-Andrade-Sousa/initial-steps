<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jluikit.yaml',
    'modified' => 1701870211,
    'data' => [
        'name' => 'Uikit3 for Gantry5',
        'description' => 'The UIkit 3 Framework for JoomLeads\'s Particles.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable atom.',
                    'default' => true
                ],
                'uikit_icon' => [
                    'type' => 'select.select',
                    'label' => 'Load Uikit Icons',
                    'description' => 'Enable or disable the loading of the Ukit3 icon library on the frontend.',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'Uikit CSS Framework <strong>Version: 2.2.9</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/uikit3-for-gantry5/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
