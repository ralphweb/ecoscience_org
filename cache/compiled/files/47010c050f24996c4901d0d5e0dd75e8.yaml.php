<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-admin/user/config/site.yaml',
    'modified' => 1497408812,
    'data' => [
        'title' => 'ecoscience.org',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Rodolfo Inostroza',
            'email' => 'info@randomstudio.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
