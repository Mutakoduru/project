<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'db_connect.php';
$pid = $_POST['pid'];
$presc = $_POST['desc'];

$query = "INSERT INTO `prescription` (`pid`, `presc`) VALUES 
    ('" . $pid . "','" . $presc . "')";

$result = mysql_query($query) or die('Can not insert because ' . mysql_error());
echo mysql_affected_rows();
if (mysql_affected_rows()) {
    header('Location: dosage.php');
}