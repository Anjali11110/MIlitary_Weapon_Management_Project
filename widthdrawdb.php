<html>
<center>
    <?php
include 'database.php';
if(isset($_POST['submit1']))
{{
    $userid1=$_POST['userid'];
    $arid1=$_POST['arid'];
    $quantity1=$_POST['quantity'];
}
$sql="insert into demo3(userid,arid,quantity) VALUES('$userid1','$arid1','$quantity1'); 
UNION UPDATE demo1 SET quantity=quantity-'$quantity1' WHERE arid='$arid1'";
if($con->multi_query($sql))
{
   
   echo" NOW YOU CAN TAKE YOUR ARMOR"; 
}
else{
    echo "PLZ TRY AGAIN SOLIDER";
}}

if(isset($_POST['submit2']))
{{
    $userid=$_POST['userid'];
    $arid=$_POST['arid'];
    $quantity=$_POST['quantity'];
}

$sql1="DELETE FROM demo3  WHERE arid='$arid';
UNION UPDATE demo1 SET quantity=quantity+'$quantity' WHERE arid='$arid'";
if($con->multi_query($sql1))
{
   
   echo"SUCCESSFULLY submitted"; 
}
else{
    echo "UNSUCCESSFUL TO submit plz ary again!!!";
}}

mysqli_close($con);
?>
<br><br><center><a href="loginpage.html"><input class="b2"type=Submit value="Back" style="font-size: 25px;
    background-color: red;
    color: whitesmoke;"></a></center>
</center>
