<html>
    <head>
        <style>
            .b2{
            font-size: 25px;
    background-color: red;
    color: whitesmoke;
            }
        </style>
</head>
<center>
    <?php
include 'database.php';
if(isset($_POST['submit1']))
{
   
    $userid=$_POST['userid'];
   
}
$sql="DELETE FROM demo  WHERE userid='$userid'";
if(mysqli_query($con,$sql))
{
   
   echo"SUCCESSFULLY DELETE THE RECORD OF  SOLIDER"; 
}
else{
    echo "UNSUCCESSFUL TO DELETE SORRY RETRY AGAIN PLZ";
}
mysqli_close($con);
?>
<br><br><center><a href="admin.html"><input class="b2"type=Submit value="Back" ></a></center>
</center>