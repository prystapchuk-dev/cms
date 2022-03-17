<?php
namespace Engine\Service;
use Engine\DI\DI;
abstract class AbstractProvider
{
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    abstract function init();
}