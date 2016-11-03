<?php

include 'db_connect.php';
$tobacco = $_POST['tobacco'];
$alcohol = $_POST['alcohol'];
$bp = $_POST['bp'];
$sugar = $_POST['sugar'];
$pid = $_POST['pid'];
$dept = $_POST['dept'];
$test = $_POST['test'];
$pdesc = $_POST['pdesc'];


$query = "INSERT INTO `p_history` (`pid`,`tobacco`, `alcohol`, `bp`,`sugar`,`pdesc`,`test`,`dept`) VALUES 
    ('" .$pid."','" . $tobacco . "','" . $alcohol . "','" . $bp . "','" . $sugar . "','" .$pdesc ."','".$test ."','". $dept ."')";

$result = mysql_query($query) or die('Can not insert because ' . mysql_error());
echo mysql_affected_rows();
if (mysql_affected_rows()) {
    header('Location: adetails.php');
}
/* $username = "root";
  $password = "";
  try {
  $pdo = new PDO('mysql:host=localhost;dbname=chistar', $username,$password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO patient VALUES(:id, :firstname, :lastname, :phone, :email, :rate, :city_name, :created_at, :is_deleted)');
  $stmt->execute(array(
  ':id' => '',
  ':firstname' => $firstname,
  ':lastname' => $lastname,
  ':phone' => $phone,
  ':email' => $email,
  ':rate' => $rate,
  ':city_name' => $city,
  ':created_at' => $datetime,
  'is_deleted' => $is_deleted
  ));
  # Affected Rows?
  if($stmt->rowCount()){
  header('Location: viewUser.php');
  }
  } catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  header('Location:errorPage.php?errorMsg='.$e->getMessage());
  }
 */
?>