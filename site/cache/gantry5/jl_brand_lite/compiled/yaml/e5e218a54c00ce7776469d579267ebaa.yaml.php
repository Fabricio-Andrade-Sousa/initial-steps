<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vol4_1/infinityfree.com/if0_35516079/htdocs/site/media/gantry5/engines/nucleus/particles/module.yaml',
    'modified' => 1701870135,
    'data' => [
        'name' => 'Module Instance',
        'description' => 'Display a module instance.',
        'type' => 'position',
        'icon' => 'fa-object-ungroup',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable module positions.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'To edit the Module please use the <a href="index.php?option=com_modules" target="_blank" data-g-urltemplate="index.php?option=com_modules&view=module&task=module.edit&id=#ID#" href="#">Joomla\'s Module Manager <i class="fa fa-fw fa-external-link fa-external-link-alt" aria-hidden="true"></i></a>'
                ],
                'module_id' => [
                    'type' => 'gantry.module',
                    'label' => 'Module Id',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Module',
                    'description' => 'Enter module Id.',
                    'pattern' => '\\d+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
