<?php 
include "../config.php";
$getun=$_GET['txtadminun'];
$getpw=$_GET['txtadminpw'];
$valid="Invalid Username or Password !";
	$qry="select * from admin where username= '".$getun."'";
	$res=mysql_query($qry);
	$fres=mysql_fetch_array($res);
		if($fres['username']==$getun)
		{
			if($fres['password']==$getpw)
			{
				$_SESSION['adminname']=$getun;
				header("location:index.php");
			}
			else
			{
				header("location:login.php?valid=".$valid);
			}
		}
		else
		{
				header("location:login.php?valid=".$valid);
		}
?>	
