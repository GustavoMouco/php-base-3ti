<?php
include 'connect.php';
$sq="delete from produtos where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:Produto.php');
?>