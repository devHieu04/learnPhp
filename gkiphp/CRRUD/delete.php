<?php
$connection = mysqli_connect("localhost","root", "anhyeuem1902@","GKi");
 if (!$connection)
{
 die("Could not connect to");
}
if(isset($_POST['id']))
{
 $userid=$_POST['id'];
 $query = "delete from users where id = '$userid'";
 if(mysqli_query($connection,$query))
 {
    echo "oke ";
    header("Location:index.php");

 }
 else
 {
    echo "not gud";
 }
}
mysqli_close($connection);
?>
