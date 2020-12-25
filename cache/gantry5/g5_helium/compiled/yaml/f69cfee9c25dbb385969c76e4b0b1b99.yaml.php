<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/config/12/page/head.yaml',
    'modified' => 1607926288,
    'data' => [
        'atoms' => [
            0 => [
                'id' => 'assets-5842',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'inherit' => [
                    'outline' => 'default',
                    'atom' => 'assets-5842',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            1 => [
                'title' => 'Google Analytics',
                'type' => 'analytics',
                'id' => 'analytics-8341',
                'inherit' => [
                    'outline' => 'default',
                    'atom' => 'analytics-8341',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            2 => [
                'id' => 'assets-9950',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.g-home-particles.g-helium-style #g-intro {
position:relative;
}

.g-home-particles.g-helium-style #g-intro .g-container {
position: absolute;
bottom:-300%;
z-index:30;
}

.call-to-action-form {
padding:20px !important;
background-color: rgba(255,255,255,0.6);
}


@media (max-width: 700px) {
  .g-home-particles.g-helium-style #g-intro .g-container {
    position: static;
    bottom:0;
     z-index:1;
   }
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'Custom Home'
                        ]
                    ],
                    'javascript' => [
                        
                    ]
                ]
            ]
        ]
    ]
];
