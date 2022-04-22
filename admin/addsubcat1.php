<?php
include "config.php";
$name=$_GET['txtnm'];
$cat_id=$_GET['cat_id'];
$query="select * from subcategory";
$res=mysql_query($query);
		while($fres=mysql_fetch_array($res))
		{
			if($fres['name']==$name)
			{
				$valid="Subcategory is already exists !";
				header("location:addsubcat.php?valid=".$valid);
				exit;
			}
		}
		
		$query="INSERT INTO `subcategory` (`category_id`,`name`) VALUES ('".$cat_id."','".$name."')";
		mysql_query($query);
		header("location:addsubcat.php");

?>