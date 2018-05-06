<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/tcm/user/themes/tcmtheme/blueprints/modular/orchestrating.yaml',
    'modified' => 1525640613,
    'data' => [
        'title' => 'Orchestrating',
        'form' => [
            'fields' => [
                'header.sectiontitle' => [
                    'type' => 'text',
                    'label' => 'Section Title'
                ],
                'header.sectionblurb' => [
                    'type' => 'text',
                    'label' => 'Short Blurb'
                ],
                'header.highlights' => [
                    'name' => 'blurb',
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => 'Highlights',
                    'fields' => [
                        '.highlightdescription' => [
                            'type' => 'text',
                            'label' => 'Description'
                        ],
                        '.image' => [
                            'type' => 'pagemediaselect',
                            'label' => 'Image'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
