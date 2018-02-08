<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/1
 * Time: 11:47
 */
require_once "check.php";

require_once "../tools.php";
$typename = post('typename');
if($typename == ""){
    header('location:./typelist.php');
    exit();
}

$db = conn();

$sql = 'insert into nx_type(name) VALUES (:name)';

$stmt = $db ->prepare($sql);

$stmt -> execute([':name'=>$typename]);

if($db->lastInsertId()>0){
    header('location:./typelist.php');
}else{
    echo 'error';
}
