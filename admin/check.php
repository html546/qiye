<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
    exit;//特别重要，否则下面的代码依然会执行
}