<?php

namespace Engine\Helper;

class Common
{
    public function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function getPathUrl()
    {
        $pathUrl = substr($_SERVER['REQUEST_URI'], 4);
        if ($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, 0, $position);
        }

        return $pathUrl;
    }





}