<?php
include 'cox.php';
if(isset($_POST['action']))
{

$name = $_POST['name'];
$price = $_POST['price'];
$orginal = $_POST['orginal'];

$Quantity = $_POST['Quantity'];
$cat = $_POST['cat'];
$c= $_POST['details_link'];   
$photo=$_POST['image'];
$upload="uploads/".$photo;

$sql = "INSERT INTO items (name,oprice,price,quantity,cat,photo,details) VALUES ('$name',$orginal,$price,$Quantity,'$cat','$upload','$c')";
$con->query($sql);
move_uploaded_file($_POST['image'],$upload);

    header('location:admin-page.php');

}
?>
