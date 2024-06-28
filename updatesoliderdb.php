<html>
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
$sql="UPDATE demo SET name='$name',email='$email',password='$password',usertype='$usertype' WHERE userid='$userid'";
if(mysqli_query($con,$sql))
{
   
   echo"SUCCESSFULLY UPDATED THE RECORD OF  SOLIDER"; 
}
else{
    echo "UNSUCCESSFUL TO UPDATE SORRY RETRY AGAIN PLZ";
}
mysqli_close($con);
?>
<br><br><center><a href="admin.html"><input class="b2"type=Submit value="Back"style="font-size: 25px;
    background-color: red;
    color: whitesmoke;"></a></center>
</center>