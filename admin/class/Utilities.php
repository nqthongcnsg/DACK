<?php 
class Utilities
{
    public static function get($key, $defaultValue='')
    {
        return isset($_GET[$key])?$_GET[$key]:$defaultValue;
    }

    public static function post($key, $defaultValue='')
    {
        return isset($_GET[$key])?$_GET[$key]:$defaultValue;
    }

    //p: mat khau goc, chua ma hoa.
    //return: mat khau da ma hoa
    public static function encrypt($p)
    {
        $s1='@)-T!'; $s2='b~#HW';//salt - thuoc
        $p = $s1 .$p . $s2;
        $p= md5($p);
        return $p;
    }
}