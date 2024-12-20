<?php

class myAutoload
{
    public static function start()
    {
        spl_autoload_register([__CLASS__, 'autoload']);

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://' . '/TutoJS/');
        define('ROOT', $root . '/TutoJS');
        define('BASEURL', '/TutoJS');

        define('CONTROLLER', ROOT . 'controller/');
        define('VIEW', ROOT . 'view/');
        define('MODEL', ROOT . 'model/');
        define('CLASSES', ROOT . 'classes/');
        define('CONFIG', ROOT . 'config/');

        define('ASSETS', HOST . 'zssets/');
    }

    public static function autoload($class)
    {
        if (file_exists(MODEL . $class . '.php'))
        {
            include_once MODEL . $class . '.php';
        } 
        elseif (file_exists(CONTROLLER . $class . '.php'))
        {
            include_once CONTROLLER . $class . 'php';
        }
        elseif (file_exists(CLASSES . $class . 'php'))
        {
            include_once CLASSES . 'php';
        }
        elseif (file_exists(CONFIG . $class . 'php'))
        {
            include_once CONFIG . $class . 'php';
        }
        else
        {
            throw new Exception ("La classe $class n'a pas été trouvée.");
        }
    }
}

?>