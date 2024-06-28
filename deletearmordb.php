<html>
<center>
    <?php
include 'database.php';
if(isset($_POST['submit1']))
{
   
    $arid=$_POST['arid'];
   
}
$sql="DELETE FROM demo1  WHERE arid='$arid'";
if(mysqli_query($con,$sql))
{
   
   echo"SUCCESSFULLY DELETE THE RECORD OF  Armor"; 
}
else{
    echo "UNSUCCESSFUL TO DELETE SORRY RETRY AGAIN PLZ";
}
mysqli_close($con);
?>
<br><br><center><a href="admin.html"><input class="b2"type=Submit value="Back" style="font-size: 25px;
    background-color: red;
    color: whitesmoke;"></a></center>
</center>