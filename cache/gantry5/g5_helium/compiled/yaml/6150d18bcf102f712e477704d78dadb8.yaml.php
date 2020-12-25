<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/particles/gp_heading1.yaml',
    'modified' => 1607749003,
    'data' => [
        'name' => 'Gp Heading 1',
        'description' => 'Displays Gp Heading 1',
        'type' => 'particle',
        'icon' => 'fa-header',
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
                    'content' => '<h4 style="margin:0;"><a href="https://gantry5particles.com/i/heading-1" target="_blank"><i class="fa fa-external-link"></i> See demo</a></h4>'
                ],
                'headline' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'description' => 'Customize the headline text.',
                    'placeholder' => 'Enter headline',
                    'overridable' => false
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Headline Icon',
                    'overridable' => false
                ],
                'tag' => [
                    'type' => 'select.select',
                    'label' => 'Headline Tag',
                    'placeholder' => 'Select...',
                    'default' => 'h1',
                    'overridable' => false,
                    'options' => [
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3'
                    ]
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description',
                    'overridable' => false
                ],
                'textAlign' => [
                    'type' => 'select.select',
                    'label' => 'Text Align',
                    'placeholder' => 'Select...',
                    'default' => 'left',
                    'overridable' => false,
                    'options' => [
                        'left' => 'Left',
                        'center' => 'Center',
                        'right' => 'Right'
                    ]
                ],
                'margin' => [
                    'type' => 'input.number',
                    'label' => 'Margin Bottom (in px)',
                    'overridable' => false,
                    'default' => '60'
                ]
            ]
        ]
    ]
];
