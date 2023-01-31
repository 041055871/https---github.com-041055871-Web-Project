<?php
$con=mysqli_connect('localhost','root','','assignment2','3306');
$email=$_POST['email'];
$pwd=$_POST['password'];
$res=true;
if($con){
    $log="select * from customer where email='$email'";
    $res=mysqli_query($con,$log);
    if($res->num_rows > 0){
        echo 2;//Email Has Been Used;
    }
    else{
        echo 1;//Regist Successfully;
        $reg="insert into customer(email, password) values('$email','$pwd')";
        $res=mysqli_query($con,$reg);
    }
}
mysqli_close($con);
?>
