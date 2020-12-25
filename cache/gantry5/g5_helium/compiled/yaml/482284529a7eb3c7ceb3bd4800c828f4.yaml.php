<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/particles/gp_cookie_consent.yaml',
    'modified' => 1607749030,
    'data' => [
        'name' => 'Gp Cookie Consent',
        'description' => 'Disply Gp Cookie Consent.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_note_demo' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => '<h4 style="margin:0;"><a href="https://gantry5particles.com/atoms/cookie-consent" target="_blank"><i class="fa fa-external-link"></i> See demo</a></h4>'
                ],
                'position' => [
                    'type' => 'select.select',
                    'label' => 'Position',
                    'default' => 'bottom',
                    'options' => [
                        'bottom' => 'Banner Bottom',
                        'top' => 'Banner Top',
                        'pushdown' => 'Banner top (pushdown)',
                        'bottom-left' => 'Floating Left',
                        'bottom-right' => 'Floating Right'
                    ]
                ],
                'layout' => [
                    'type' => 'select.select',
                    'label' => 'Layout',
                    'default' => 'block',
                    'options' => [
                        'block' => 'Block',
                        'edgeless' => 'Edgeless',
                        'classic' => 'Classic',
                        'wire' => 'Wire'
                    ]
                ],
                'bgColor' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'default' => '#000000'
                ],
                'txtColor' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#ffffff'
                ],
                'btnBg' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Background',
                    'default' => '#f1d600'
                ],
                'btnColor' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Text Color',
                    'default' => '#000000'
                ],
                'message' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'default' => 'We use cookies to ensure you get the best experience on our website.'
                ],
                'linkTxt' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'default' => 'Learn more',
                    'description' => 'Leave empty if you don\'t need.'
                ],
                'linkUrl' => [
                    'type' => 'input.text',
                    'label' => 'Link URL',
                    'placeholder' => 'cookie-policy',
                    'description' => 'Leave empty if you don\'t need.'
                ],
                'dismissTxt' => [
                    'type' => 'input.text',
                    'label' => 'Dismiss Button Text',
                    'default' => 'Got It!'
                ]
            ]
        ]
    ]
];
