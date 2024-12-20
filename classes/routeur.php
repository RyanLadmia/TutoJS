<?php

class routeur
{
    private $request;
    private $routes =
    [
        'home' => ["controller" => 'HomeController', "method" => 'showHome']
    ];
}


?>