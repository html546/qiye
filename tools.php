<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/1
 * Time: 11:49
 */

function get($name){
   return isset($_GET[$name])?$_GET[$name]:"";
}
function post($name){
    $text = isset($_POST[$name])?$_POST[$name]:"";
//    $text = htmlspecialchars($text);
    return $text;
}


function conn(){
    $dns = 'mysql:host=localhost;dbname=qy';
    $db = new PDO($dns,'root','root');
    $db->exec('set names utf8');
    return $db;
}

function clean($html){

    require_once dirname(__FILE__).'/admin/purifier/HTMLPurifier.auto.php';
    require_once dirname(__FILE__).'/admin/purifier/HTMLPurifier.func.php';

    return HTMLPurifier($html);
}