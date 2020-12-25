<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/conqbfeh/public_html/templates/g5_helium/custom/particles/jlpreloader.yaml',
    'modified' => 1607748201,
    'data' => [
        'name' => 'JL Preloader',
        'description' => 'Create a simple preloader on the screen while the rest of the page’s content is still loading.',
        'type' => 'atom',
        'icon' => 'fa-image',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Lightcase atom.',
                    'default' => true
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Preloader Image',
                    'description' => 'Select desired image for preloader icon, default using Spinner icon from Uikit.'
                ],
                'image_width' => [
                    'type' => 'input.number',
                    'label' => 'Width',
                    'description' => 'Enter the image\'s width.',
                    'min' => 0,
                    'placeholder' => 'auto'
                ],
                'image_height' => [
                    'type' => 'input.number',
                    'label' => 'Height',
                    'description' => 'Enter the image\'s height.',
                    'min' => 0,
                    'placeholder' => 'auto'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'description' => 'Customize the background color for body on load.'
                ],
                'fadeout' => [
                    'type' => 'input.number',
                    'label' => 'FadeOut',
                    'description' => 'Changing the visibility of elements on the page with a fading effect.',
                    'placeholder' => 200
                ],
                'color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Color',
                    'description' => 'Customize the color for icon on load.(Use this option for spinner icon only)'
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success',
                    'content' => 'JL Preloader Atom <strong>Version: 2.1.4</strong> Copyright (C) <a href="https://joomlead.com/" target="_blank">https://joomlead.com</a> | <a href="https://joomlead.com/g5/docs/preloader-atom/" target="_blank">Documentation</a>'
                ]
            ]
        ]
    ]
];
