<?php
include "config.php";
include "index.php";
$id=$_GET['id'];
$query="select * from book where book_id='".$id."'";
$res=mysql_query($query);
$fres=mysql_fetch_array($res);
	echo"<form action='delete_book.php' method='post' enctype='multipart/form-data'>";
		echo"<table border=0 align=center class='borderoftable'>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Id</td>";
				echo"<td><input type='text' name='txtid' class='buttonwhitecomb' disabled value=".$fres['book_id']."></td>";
				echo"<input type='hidden' name='hiddenid' value=".$fres['book_id'].">";
				echo"<input type='hidden' name='hiddenpage' value=".$_GET['page'].">";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category Name</td>";
				echo"<td><input type='text' name='txtcatnm' class='buttonwhitecomb' value=".$fres['category_name']."></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Name</td>";
				echo"<td><input type='text' name='txtprodnm' class='buttonwhitecomb' value=".$fres['book_name']."></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Price</td>";
				echo"<td><input type='text' name='txtprice' class='buttonwhitecomb' value=".$fres['book_price']."></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>book Discription</td>";
				echo"<td ><textarea name='txtdisc' class='Buttonwhitecomb'>".$fres['prod_discription']."</textarea></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>Short Discription</td>";
				echo"<td><textarea name='txtshortdisc' class='buttonwhitecomb'>".$fres['short_disc']."</textarea></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>Small Image</td>";
				echo"<td><input type='file' name='txtnmsmall' class='buttonwhite' size=13></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Big Image</td>";
				echo"<td><input type='file' name='txtnmbig' class='buttonwhite' size=13></td>";
			echo"</tr>";
			echo"<td class=bigboldblack>file upload</td>";
				echo"<td><input type='file' name='txtfile' class='buttonwhite' size=13></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td>&nbsp; </td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td colspan=2 align=center class=buttonblack><input type='submit' class='buttongreen' name='buttonok' value='  Delete '</td>";
			echo"</tr>";	
		echo"</table>";
					
				echo"</td>";
			echo"</tr>";
		echo"</table>";
	echo"</form>";
?>
							</td>
						</tr>

						<tr>
							<td colspan='3'>&nbsp;</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>