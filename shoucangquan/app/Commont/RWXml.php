<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/4
 * Time: 10:15
 */
namespace App\Commont;
class RWXml
{
    public  function read($path,$name){
        header("content-type:text/html; charset=utf-8");
        $myxml= simplexml_load_file($path.'/'.$name);
        return $myxml;
    }
    public  function write($path,$name){

    }
}