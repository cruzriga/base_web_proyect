<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/particles/gp_stickyheader.yaml',
    'modified' => 1607748654,
    'data' => [
        'name' => 'Gp Sticky Header',
        'description' => 'Display Sticky Header.',
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
                    'content' => '<h4 style="margin:0;"><a href="https://gantry5particles.com/atoms/sticky-header" target="_blank"><i class="fa fa-external-link"></i> See demo</a></h4>'
                ],
                'headerId' => [
                    'type' => 'input.text',
                    'label' => 'Header ID',
                    'default' => '#g-header',
                    'overridable' => false
                ]
            ]
        ]
    ]
];
