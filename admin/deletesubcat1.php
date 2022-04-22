.
<?php
include "config.php";
$query="DELETE FROM `subcategory` WHERE `id`='".$_GET['id']."'";
mysql_query($query);
$query="DELETE FROM `book` WHERE `subcat_name`='".$_GET['txtnm']."'";
mysql_query($query);
header("location:deletesubcat.php");
?>