<?php
namespace Engine;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
use Engine\Helper\Common;

class Cms
{
    private $di;

    public $router;

    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    public function run()
    {
       $this->router->add('home', '/', 'HomeController:index');
       $this->router->add('product', '/user/12', 'ProductController:index');
       $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

       print_r($routerDispatch);
       print_r(Common::getPathUrl());



    }
}