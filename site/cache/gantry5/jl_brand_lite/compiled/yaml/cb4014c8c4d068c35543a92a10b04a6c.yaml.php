<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/templates/jl_brand_lite/particles/jllogo.yaml',
    'modified' => 1701870211,
    'data' => [
        'name' => 'JL Logo Advanced',
        'description' => 'Display a logo or an image.',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable logo particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Url',
                    'description' => 'Url for the image. Leave empty to go to home page.',
                    'placeholder' => 'http://'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Target',
                    'description' => 'Target browser window when logo is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_self',
                    'options' => [
                        '_self' => 'Self',
                        '_parent' => 'Parent Frame',
                        '_blank' => 'New Window or Tab'
                    ]
                ],
                'logo_type' => [
                    'type' => 'select.selectize',
                    'label' => 'Logo Type',
                    'description' => 'Choose the logo type.',
                    'placeholder' => 'Select...',
                    'default' => 'image',
                    'options' => [
                        'image' => 'Image',
                        'svg' => 'Svg image',
                        'text' => 'Text'
                    ]
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Logo Image',
                    'description' => 'Select desired logo image.'
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Maximum Height',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Logo Text',
                    'description' => 'Input logo image alt text.',
                    'placeholder' => 'Image ALT'
                ],
                'logo_description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Logo Description',
                    'description' => 'Input logo description text.',
                    'placeholder' => 'Description'
                ],
                'card_settings' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Description Settings'
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Select one of the boxed card styles or a blank panel.',
                    'default' => 'blank',
                    'overrideable' => false,
                    'options' => [
                        'blank' => 'None',
                        'default' => 'Default',
                        'primary' => 'Primary',
                        'secondary' => 'Secondary'
                    ]
                ],
                'cardsize' => [
                    'type' => 'select.select',
                    'label' => 'Size',
                    'description' => 'Define the card\'s size by selecting the padding between the card and its content.',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'small' => 'Small',
                        'large' => 'Large'
                    ]
                ],
                'description_position' => [
                    'type' => 'select.select',
                    'label' => 'Position',
                    'description' => 'Select the popover\'s alignment to its marker. If the popover doesn\'t fit its container, it will flip automatically.',
                    'default' => 'bottom-justify',
                    'options' => [
                        'bottom-justify' => 'Bottom Justify',
                        'bottom-left' => 'Bottom Left',
                        'bottom-center' => 'Bottom Center',
                        'bottom-right' => 'Bottom Right',
                        'top-left' => 'Top Left',
                        'top-center' => 'Top Center',
                        'top-right' => 'Top Right',
                        'top-justify' => 'Top Justify',
                        'left-top' => 'Left Top',
                        'left-center' => 'Left Center',
                        'left-bottom' => 'Left Bottom',
                        'right-top' => 'Right Top',
                        'right-center' => 'Right Center',
                        'right-bottom' => 'Right Bottom'
                    ]
                ],
                'description_grid_width' => [
                    'type' => 'select.select',
                    'label' => 'Grid Width',
                    'description' => 'Define the width of the description. Choose between percent and fixed widths or expand columns to the width of their content.',
                    'default' => '1-3',
                    'options' => [
                        'auto' => 'Auto',
                        '1-2' => '50%',
                        '1-3' => '33%',
                        '1-4' => '25%',
                        '1-5' => '20%',
                        'small' => 'Small',
                        'medium' => 'Medium',
                        'large' => 'Large'
                    ]
                ],
                'description_grid_breakpoint' => [
                    'type' => 'select.select',
                    'label' => 'Width Breakpoint',
                    'description' => 'Set the breakpoint from which the description and grid will stack.',
                    'default' => 'm',
                    'options' => [
                        's' => 'Small (Phone Landscape)',
                        'm' => 'Medium (Tablet Landscape)',
                        'l' => 'Large (Desktop)'
                    ]
                ],
                'description_animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation',
                    'description' => 'Select animation on hover.',
                    'default' => 'inherit',
                    'options' => [
                        'inherit' => 'None',
                        'fade' => 'Fade',
                        'scale-up' => 'Scale Up',
                        'scale-down' => 'Scale Down',
                        'slide-top-small' => 'Slide Top Small',
                        'slide-bottom-small' => 'Slide Bottom Small',
                        'slide-left-small' => 'Slide Left Small',
                        'slide-right-small' => 'Slide Right Small',
                        'slide-top-medium' => 'Slide Top Medium',
                        'slide-bottom-medium' => 'Slide Bottom Medium',
                        'slide-left-medium' => 'Slide Left Medium',
                        'slide-right-medium' => 'Slide Right Medium',
                        'slide-top' => 'Slide Top 100%',
                        'slide-bottom' => 'Slide Bottom 100%',
                        'slide-left' => 'Slide Left 100%',
                        'slide-right' => 'Slide Right 100%'
                    ]
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Logo Advanced <strong>Version: 2.2.9</strong> by <a href="https://joomlead.com" target="_blank">Joomlead</a> | <a href="https://joomlead.com/g5/docs/logo-advanced-particle/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
