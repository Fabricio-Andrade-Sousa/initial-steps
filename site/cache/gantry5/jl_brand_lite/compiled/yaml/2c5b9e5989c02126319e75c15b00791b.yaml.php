<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/blueprints/styles/breakpoints.yaml',
    'modified' => 1701870209,
    'data' => [
        'name' => 'Breakpoints',
        'description' => 'Breakpoint container sizes for different viewports',
        'type' => 'configuration',
        'form' => [
            'fields' => [
                'large-desktop-container' => [
                    'type' => 'input.text',
                    'label' => 'Large Desktop',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '1600px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'desktop-container' => [
                    'type' => 'input.text',
                    'label' => 'Desktop',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '1200px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'tablet-container' => [
                    'type' => 'input.text',
                    'label' => 'Tablet',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '960px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'large-mobile-container' => [
                    'type' => 'input.text',
                    'label' => 'Mobile',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '640px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'mobile-menu-breakpoint' => [
                    'type' => 'input.text',
                    'label' => 'Mobile Menu',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '960px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ]
            ]
        ]
    ]
];
