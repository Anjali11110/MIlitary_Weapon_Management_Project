<?php
$servername="localhost";
$uname="root";
$pass="";
$database="project";
session_start();
$con=mysqli_connect($servername,$uname,$pass,$database);
if(!$con)
{
    die("error detected".mysqli_error($con));
}
if(isset($_POST['submit1']))
{
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $sql="select * from demo where userid='$userid' and password='$password'";
    $que=mysqli_query($con,$sql);
    $num=mysqli_fetch_array($que);
    if($num>0){
        if($num["usertype"]=="admin"){
              header("location:admin.html");
        
    }
    else
    {
        header("location:solider.html");
    }
        }
    else{
        echo"Invalid username and password";
    }
}
?>