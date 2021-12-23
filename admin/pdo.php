<?php
include_once './config.php';
$objPDO=new PDO('mysql:host=' .HOST.';dbname=' . DB, USER ,PW );
$objPDO->query('set names utf8');
