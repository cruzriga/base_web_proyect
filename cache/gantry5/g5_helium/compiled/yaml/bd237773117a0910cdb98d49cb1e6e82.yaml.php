<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/conqbfeh/public_html/templates/g5_helium/custom/particles/jluikit.yaml',
    'modified' => 1607748217,
    'data' => [
        'name' => 'UIkit3 for Gantry5',
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
                'jslocation' => [
                    'type' => 'select.select',
                    'label' => 'JS Location',
                    'description' => 'Select where the UIkit JS assets should be loaded. The default is added to the head tag.',
                    'placeholder' => 'Select...',
                    'default' => 'head',
                    'options' => [
                        'footer' => 'Footer',
                        'head' => 'Head'
                    ]
                ],
                'uikit_icon' => [
                    'type' => 'select.select',
                    'label' => 'Uikit Icons',
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
                    'content' => 'UIkit 3 for Gantry 5 <strong>Version: 2.1.4</strong> Copyright (C) <a href="https://joomlead.com/" target="_blank">https://joomlead.com</a>'
                ]
            ]
        ]
    ]
];
