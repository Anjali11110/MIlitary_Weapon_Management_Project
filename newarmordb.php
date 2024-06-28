<html>
<center>
    <?php
include 'database.php';
if(isset($_POST['submit1']))
{
    $arid=$_POST['arid'];
    $armorname=$_POST['armorname'];
    $quantity=$_POST['quantity'];
}
$sql="insert into demo1(arid,armorname,quantity) VALUES('$arid','$armorname','$quantity')";
if(mysqli_query($con,$sql))
{
   
   echo"SUCCESSFULLY INSERTED THE RECORD OF NEW Armor"; 
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