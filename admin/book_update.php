<?php
include "config.php";

$query="select * from book where book_id='".$_POST['hiddenid']."'";
$res=mysql_query($query);
$fres=mysql_fetch_array($res);
	$uploaddir="image/small/";
	$fileupload=$_FILES['txtnmsmall']['name'];
if($fileupload!="")
{
	$filename=$uploaddir.$fileupload;
	copy($_FILES['txtnmsmall']['tmp_name'],$filename);
}
else
{
	$fileupload=$fres['book_image'];
}
	$uploaddirbig="image/big/";
	$fileuploadbig=$_FILES['txtnmbig']['name'];
if($fileuploadbig!="")
{
	$filenamebig=$uploaddirbig.$fileuploadbig;
	copy($_FILES['txtnmbig']['tmp_name'],$filenamebig);
}
else
{
	$fileuploadbig=$fres['book_bigimage'];
}


$qry="UPDATE `book` SET `book_id` = '".$_POST['hiddenid']."', `category_name` = '".$_POST['txtcatnm']."', `book_name` = '".$_POST['txtprodnm']."', `book_image` = '".$fileupload."', `book_price` = '".$_POST['txtprice']."', `book_discription` = '".$_POST['txtdisc']."', `short_disc` = '".$_POST['txtshortdisc']."', `book_bigimage` = '".$fileuploadbig."', `publisher` = '".$_POST['txtpublisher']."', `subcat_name` = '".$_POST['txtsubcatnm']."' WHERE book_id='".$_POST['hiddenid']."'";
$result=mysql_query($qry);
header("location:booklist.php?name=updatebook&pgno=".$_POST['hiddenpage']);
?>