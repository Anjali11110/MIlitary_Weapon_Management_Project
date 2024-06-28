<html>
<body>
<h1><center>
<table border="1" style="width=50%;">
<tr>
    <th>name</th>
    <th>userid</th>
    <th>email</th>
    <th>password</th>
    <th>usertype</th>
</tr>
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
if(isset($_POST['Search']))
{
    $userid=$_POST['userid'];
    $sql="select * from demo where userid='$userid'";
    $que=mysqli_query($con,$sql);
    $num=mysqli_num_rows($que);
    if($num!=0)
    {
     
     while($rows=mysqli_fetch_assoc($que))
    { 
      echo"
      <tr>
      <td>".$rows['name']."</td>
      <td>".$rows['userid']."</td>  
      <td>".$rows['email']."</td> 
      <td>".$rows['password']."</td>
      <td>".$rows['usertype']."</td>
      ";
    }   
    
   }
   else
   {
    echo"Record is not found";
    
   }
}

?>
  </table>
     
</h1>
<br><br><center><a href="admin.html"><input class="b2"type=Submit value="Back" style="font-size: 25px;
    background-color: red;
    color: whitesmoke;"></a></center>
