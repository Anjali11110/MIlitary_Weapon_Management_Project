<html>
    <style>
        center{
            margin-top=25%;
        }
        </style>
<center>
    <?php
include 'database.php';
if(isset($_POST['submit1']))
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
   
   echo"SUCCESSFULLY INSERTED THE RECORD OF NEW SOLIDER"; 
}
else{
    echo "UNSUCCESSFUL TO INSERT SORRY RETRY AGAIN PLZ";
}
mysqli_close($con);
?>
<br><br><center><a href="admin.html"><input class="b2"type=Submit value="Back" style="font-size: 25px;
    background-color: red;
    color: whitesmoke;"></a></center>
</center>