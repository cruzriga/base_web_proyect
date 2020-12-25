<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/qmvlbbvr/public_html/templates/g5_helium/custom/config/default/page/head.yaml',
    'modified' => 1607926838,
    'data' => [
        'meta' => [
            
        ],
        'head_bottom' => '',
        'atoms' => [
            0 => [
                'id' => 'assets-5842',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '#g-header .g-owlcarousel.has-color-overlay .owl-stage > .owl-item .g-owlcarousel-item-img:after{
opacity: 0.6;
}

.g-home-particles.g-helium-style #g-navigation {
 background-color: white;
}
.g-home-particles.g-helium-style #g-navigation .g-social a {
 color: black;
}

#g-intro .container{
 position: absolute;
 top: 10%;
 z-index:100;
}
.mod_tm_ajax_contact_form .span12{
margin-left:0px;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '',
                            'name' => 'Custom styles'
                        ],
                        1 => [
                            'location' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
                            'inline' => '',
                            'extra' => [
                                0 => [
                                    'crossorigin' => 'anonymous'
                                ],
                                1 => [
                                    'integrity' => 'sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2'
                                ]
                            ],
                            'priority' => '0',
                            'name' => 'Bootstrap'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => 'https://code.jquery.com/jquery-3.5.1.min.js',
                            'inline' => '',
                            'in_footer' => '1',
                            'extra' => [
                                0 => [
                                    'integrity' => '"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="'
                                ],
                                1 => [
                                    'crossorigin' => '"anonymous"'
                                ]
                            ],
                            'priority' => '0',
                            'name' => 'jQuery'
                        ]
                    ]
                ]
            ],
            1 => [
                'title' => 'Google Analytics',
                'type' => 'analytics',
                'attributes' => [
                    'enabled' => true,
                    'ua' => [
                        'anonym' => false
                    ]
                ],
                'id' => 'analytics-8341'
            ]
        ]
    ]
];
