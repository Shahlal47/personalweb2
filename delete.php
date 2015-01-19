<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "personalweb");
$query = "DELETE FROM `personalweb`.`users` WHERE `users`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
?>