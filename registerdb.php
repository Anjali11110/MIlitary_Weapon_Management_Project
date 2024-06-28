<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $userid=$_POST['userid'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype=$_POST['usertype'];
}
$sql="insert into demo(name,userid,email,password,usertype) VALUES('$name','$userid','$email','$password','$usertype')";
if(mysqli_query($con,$sql))
{
    
    header("location:loginpage.html");
    echo "<script>alert('your record inserted now plz login to the system')</script>";
}
else{
    echo "error:".mysqli_error($con);
}
mysqli_close($con);
?>