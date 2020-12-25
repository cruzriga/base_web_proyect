<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/particles/jlbacktotop.yaml',
    'modified' => 1607748211,
    'data' => [
        'name' => 'JL Back To Top',
        'description' => 'Show a scroll back to top button',
        'type' => 'atom',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'title_label' => [
                    'type' => 'input.text',
                    'label' => 'Title on hover',
                    'placeholder' => 'Back To Top'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Pick an optional icon.'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'description' => 'Customize the back to top background color.',
                    'default' => '#1c1c1c'
                ],
                'color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color',
                    'description' => 'Customize the back to top color.',
                    'default' => '#ffffff'
                ],
                'backgroundhover' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Hover',
                    'description' => 'Customize the back to top background on hover.',
                    'default' => '#439a86'
                ],
                'icon_color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Hover Color',
                    'description' => 'Customize the back to top icon color on hover.',
                    'default' => '#1c1c1c'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Back To Top <strong>Version: 2.1.4</strong> Copyright (C) <a href="https://joomlead.com/" target="_blank">https://joomlead.com</a> | <a href="https://joomlead.com/g5/docs/back-top-atom-documentation/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
