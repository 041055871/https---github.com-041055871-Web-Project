<?php
require_once('database.php');
include "headerEm.php";
$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $email = $_POST['email']; 
  $password = $_POST['password'];
  $other = $_POST['other'];
  $ins = "INSERT INTO customer (email, password, other) VALUES ('$email','$password','$other')";
  $result = mysqli_query($db, $ins);
  $id = mysqli_insert_id($db); 
  header("Location: show.php?id=  $id");
} else {
  header("Location:  new.php");
}
