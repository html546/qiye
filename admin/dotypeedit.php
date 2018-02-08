<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/1
 * Time: 11:47
 */
require_once "check.php";

require_once "../tools.php";
$id = post('id');
$typename = post('typename');
if($typename == ""){
    header('location:./typelist.php');
    exit();
}

$db = conn();

$sql = 'update nx_type set name=:name where id=:id';

$stmt = $db ->prepare($sql);

$stmt -> execute([':name'=>$typename,':id'=>$id]);

header('location:./typelist.php');

