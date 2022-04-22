<?php
include "../config.php";
$name=$_GET['txtnm'];
$query="select * from category_master";
$res=mysql_query($query);
		while($fres=mysql_fetch_array($res))
		{
			if($fres['category_name']==$name)
			{
				$valid="Category is already exists !";
				header("location:addcat.php?valid=".$valid);
				exit;
			}
		}
	$query="INSERT INTO `category_master` (`category_id`, `category_name`, `category_type`) VALUES ('".$_GET['txtid']."','".$_GET['txtnm']."','".$_GET['txttp']."')";
	mysql_query($query);
	header("location:addcat.php?name=addcategory");
?>
