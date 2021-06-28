<?php
include_once("db.php");
$select = "DELETE from customer where cust_id ='".$_GET ['del_id']."'";
$query = mysqli_query($db,$select)or die($select);
header ("Location: view.php");
?>