<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/2
 * Time: 9:54
 */
require_once "check.php";

require_once "../tools.php";

$db = conn();
$id = get('id');

$sql = 'delete from nx_article where id=:id';

$stmt = $db ->prepare($sql);
$stmt ->execute([':id'=>$id]);
$row = $stmt -> rowCount();
if($row){
    header('location:./articlelist.php');
}
