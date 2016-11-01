<?php

include 'db_connect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$adr1 = $_POST['adr1'];
$adr2 = $_POST['adr2'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$age = $_POST['age'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$emrname = $_POST['emrname'];
$emrnum = $_POST['emrnum'];

$query = "INSERT INTO `patient` (`fname`, `lname`,`gender`,`age`,`blood group`,`adr line1`,`adr line2`,`city`,`state`,`pin`,`phone`, 
    `mail id`, `emr name`,`emr number`) VALUES 
    ('" . $firstname . "','" . $lastname . "','" . $gender . "','". $age ."','" . $bloodgroup . "','" . $adr1 . "','". $adr2 ."' ,'" . $city ."',
    '" . $state . "','" . $zip . "','" .$phone ."','" . $email ."','" . $emrname ."','". $emrnum ."')";

$result = mysql_query($query) or die('Can not insert because ' . mysql_error());
echo mysql_affected_rows();
if (mysql_affected_rows()) {
    header('Location: viewUser.php');
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