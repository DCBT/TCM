<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/tcm/user/themes/tcmtheme/blueprints/modular/piano.yaml',
    'modified' => 1525640605,
    'data' => [
        'title' => 'Piano Teaching',
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
                'header.lessons' => [
                    'name' => 'lesson',
                    'type' => 'list',
                    'style' => 'vertical',
                    'limit' => 4,
                    'label' => 'Lessons',
                    'fields' => [
                        '.lessonicon' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'Icon',
                            'help' => 'See https://fontawesome.com/icons?d=gallery',
                            'default' => 'f005',
                            'options' => [
                                'f0a3' => 'certificate',
                                'f058' => 'check-circle',
                                'f004' => 'heart',
                                'f0eb' => 'lightbulb',
                                'f001' => 'notes',
                                'f044' => 'pencil',
                                'f118' => 'smile',
                                'f005' => 'star',
                                'f164' => 'thumbs-up',
                                'f091' => 'trophy'
                            ]
                        ],
                        '.lessonheader' => [
                            'type' => 'text',
                            'label' => 'Heading'
                        ],
                        '.lessonnote' => [
                            'type' => 'text',
                            'label' => 'Lesson note (e.g. \'30 or 60 minutes\'\')'
                        ],
                        '.text' => [
                            'type' => 'editor',
                            'label' => 'Text'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
