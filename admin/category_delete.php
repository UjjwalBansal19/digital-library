<?php
include "config.php";
$query="DELETE FROM `category_master` WHERE `category_id`= '".$_GET['hiddenid']."'";
mysql_query($query);
$query="DELETE FROM `book` WHERE `category_name`= '".$_GET['name']."'";
mysql_query($query);
header("location:deletecatlist.php?name=deletecategory&pgno=".$_GET['hiddenpage']);
?>
