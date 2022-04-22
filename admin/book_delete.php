<?php
include "config.php";
$uploaddir="image/small/";
$fileupload=$_FILES['txtnmsmall']['name'];
$filename=$uploaddir.$fileupload;
copy($_FILES['txtnmsmall']['tmp_name'],$filename);

$uploaddirbig="image/big/";
$fileuploadbig=$_FILES['txtnmbig']['name'];
$filenamebig=$uploaddirbig.$fileuploadbig;
copy($_FILES['txtnmbig']['tmp_name'],$filenamebig);


$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename1 = $_FILES["file_img"]["name"];	
	$filepath = "Pdf/".$filename1;
	move_uploaded_file($filetmp,$filepath);
	

 $query= "DELETE FROM `book`(`book_id`, `category_name`, `book_name`, `book_image`, `book_price`, `book_discription`, `short_disc`, `book_bigimage`, `publisher`, `subcat_name`, `path`) VALUES('".$_POST['txtid']."', '".$_POST['category_name']."', '".$_POST['txtprodnm']."', '".$fileupload."', '".$_POST['txtprice']."', '".$_POST['txtdisc']."', '".$_POST['txtshortdisc']."', '".$fileuploadbig."', '".$_POST['txtpublisher']."', '".$_POST['subcatnm']."','".$filepath."')";
//exit;
$res=mysql_query($query);
header("location:deletebook.php?name=deletebook");
?>