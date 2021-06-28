<?php
include_once("db1.php");
$select = "DELETE from staff where id ='".$_GET ['del_id']."'";
$query = mysqli_query($db1,$select)or die($select);
header ("Location: staff.php");
?>