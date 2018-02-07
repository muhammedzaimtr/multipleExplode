<?php
/**
 * Created by PhpStorm.
 * User: muhammedzaimtr
 * Web Site: https://muhammedzaim.com
 * Github: https://github.com/muhammedzaimtr
 * Date: 07/02/2018
 * Time: 11:26
 */
function multipleExplode ($depurate, $text){
    $replace = str_replace($depurate, $depurate[0], $text);
    $explode = explode($depurate[0], $replace);
    $explode = json_encode($explode);
    return $explode;
}