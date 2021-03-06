<?php

// SITE NAME

if ( !defined('SITE_NAME') )
{
    define('SITE_NAME', "URL Shortener");
}

// URL LOCATION (Don't forget "/" at the end !)

if ( !defined('BASE_URL') )
{
    define('BASE_URL', "https://github.com/darrenpritchard/URL_Shortener/");
}

// DATABASE CONFIGURATION

if ( !defined('HOST_NAME') )
{
    define('HOST_NAME', "127.0.0.1:3306");
}

if ( !defined('DB_NAME') )
{
    define('DB_NAME', "DATABASE_NAME");
}

if ( !defined('USER_NAME') )
{
    define('USER_NAME', "USERNAME");
}

if ( !defined('USER_PASSWORD') )
{
    define('USER_PASSWORD', "PASSWORD");
}
