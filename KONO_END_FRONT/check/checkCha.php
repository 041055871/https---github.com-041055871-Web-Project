<?php
$con=mysqli_connect('localhost','root','','assignment2','3306');
$email=$_POST['email'];
$pwd=$_POST['password'];
$pwd2=$_POST['password2'];
$res=true;
if($con){
    $log="select * from customer where email='$email' and password='$pwd'";
    $res=mysqli_query($con,$log);
    if($res->num_rows >0){
        echo 1;//change Successfully;
        $cha="update customer set password='$pwd2' where email='$email'";
        $res=mysqli_query($con,$cha);
    }
    else{
        echo 2;//Email or Passord Incorrect;
    }
}
mysqli_close($con);
?>