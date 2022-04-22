<?php
include "config.php";
$name=$_GET['txtnm'];
$query="select * from subcategory";
$res=mysql_query($query);
while($fres=mysql_fetch_array($res))
{
	if($fres['name']==$name)
	{
		$valid="Subcategory is already exists !";
		header("location:updatesubcat.php?catname=".$name."&valid=".$valid);
		exit;
	}
}
$query="UPDATE `subcategory` SET `name` = '".$name."' WHERE `id` =".$_GET['id']."";
$res=mysql_query($query);
$query="UPDATE `book` SET `subcat_name` = '".$name."' WHERE `id` =".$_GET['id']."";
$res=mysql_query($query);
header("location:updatesubcat.php");
?>

