<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'ServerSideProject',
        'pretty_uri' => false,
        'site_url' => 'https://serversideproject.herokuapp.com',
        'nav_menu' => [
            '' => ' Home ',
            'contact-us' => ' Contact Us ',
            'about-us' => ' Who is the Girl Gang? ',
            'm-database' => ' Movie Database '
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
