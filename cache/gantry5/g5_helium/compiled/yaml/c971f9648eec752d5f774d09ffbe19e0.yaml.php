<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/particles/gp_justicons.yaml',
    'modified' => 1607748857,
    'data' => [
        'name' => 'Gp Just Icons',
        'description' => 'Gp Just Icons particle',
        'type' => 'particle',
        'icon' => 'fa-magic',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                '_note_demo' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => '<h4 style="margin:0;"><a href="https://gantry5particles.com/i/just-icons" target="_blank"><i class="fa fa-external-link"></i> See demo</a></h4>'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'overridable' => false
                ],
                'fontSize' => [
                    'type' => 'input.number',
                    'label' => 'Font Size in px',
                    'default' => '46',
                    'overridable' => false
                ],
                'margin' => [
                    'type' => 'input.number',
                    'label' => 'Icons Margin in px',
                    'default' => '16',
                    'overridable' => false
                ],
                'headline' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'overridable' => false
                ],
                'gp_items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Create Icons',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'name',
                    'ajax' => true,
                    'overridable' => false,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.color' => [
                            'type' => 'input.colorpicker',
                            'label' => 'Icon Color'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
