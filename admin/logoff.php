<?php
		include "config.php";
		unset($_SESSION['adminname']);
		session_destroy();
		header("location:login.php")
?>
