<?php
include "config.php";

$a=$_REQUEST['id'];	

 $query= "DELETE FROM `book` where book_id='$a'";

 $v=mysql_query($query)or die("error");
if($v)
{

header("location:deletebooklist.php?name=deletebook");
}
?>