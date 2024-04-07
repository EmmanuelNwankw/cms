<?php

namespace core;

class config {
    private static $config = [
        'version'            =>'0.0.1',
        'root_dir'           =>'/cms',  // This will likely be / on a live server
        'default_controller' => 'blog', // The default home controller
        'default_layout'     => 'default',  // Default layout that is used
        'default_site_title' => 'Freeskills',  // Default site title
        'db_host'            => '127.0.0.1',  // DB host please use IP address no domain
        'db_name'            => 'cms',  // DB name
        'db_user'            => 'root',  //Db user
        'db_password'        => '',  // DB password
        'login_cookie_name'  => 'hakdjri23418la', // Login cookie name

    ];

    public static function get($key){
        return array_key_exists($key, self::$config)? self::$config[$key] : NULL;
    }
}