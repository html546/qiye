<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/1
 * Time: 14:43
 */
require_once "check.php";

require_once "../tools.php";

$id = get('id');

$db = conn();
$sql = 'delete from nx_type where id=:id';
$stmt = $db -> prepare($sql);
$stmt ->execute([':id'=>$id]);

header('location:./typelist.php');