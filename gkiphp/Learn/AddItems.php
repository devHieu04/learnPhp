<?php
$connection = mysqli_connect("localhost","root","anhyeuem1902@","products");
if(!$connection)
{
 die("not connection");
}
if(isset($_POST["name"])&& isset($_POST["number"])&& isset($_POST["color"]))
{
    $name = $_POST["name"];
    $number=$_POST["number"];
    $color = $_POST["color"];
    $query= "insert into items (name , number ,color) values ('$name', '$number', '$color')";
    if(mysqli_query($connection,$query))
    {
        header("Location:/");

    }
    else{
        echo "Error";
    }
}
?>
