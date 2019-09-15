<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Favorite Game Series',
        'pretty_uri' => false,
        'site_url' => 'https://colemanphpdemo.herokuapp.com',
        'nav_menu' => [
            '' => 'Game Series',
            'about-us' => 'About Valencia',
            'contact' => 'Contact Valencia'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
