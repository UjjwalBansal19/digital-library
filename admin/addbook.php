<?php
include "config.php";
include "index.php";
	echo"<form action='book_add.php' method='post' enctype='multipart/form-data'>";
		echo"<table border=0 align=center class='borderoftable'>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Id</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtid'></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category Name</td>";
				$query="select category_name from category_master";
				$res=mysql_query($query);
				echo"<td><select name='category_name' class='buttonwhitecomb'>";
				echo"<option value='' selected>[Select Categories]</option>";
				while($fres=mysql_fetch_array($res))
				{	
					echo"<option value=".$fres['category_name'].">".$fres['category_name']."</option>";
				}
				echo"</select></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Subcategory Name</td>";
				$query="select name from subcategory";
				$res=mysql_query($query);
				echo"<td><select name='subcatnm' class='buttonwhitecomb'>";
				echo"<option value='' selected>[Select Subcategories]</option>";
				while($fres=mysql_fetch_array($res))
				{	
					echo"<option value=".$fres['name'].">".$fres['name']."</option>";
				}
				echo"</select></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Name</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtprodnm'></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>book Price</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtprice'></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>book publisher</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtpublisher'></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>book Discription</td>";
				echo"<td><textarea name='txtdisc' class='buttonwhitecomb'></textarea></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>Short Discription</td>";
				echo"<td><textarea name='txtshortdisc' class='buttonwhitecomb'></textarea></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td class=bigboldblack>Small Image</td>";
				echo"<td><input type='file' name='txtnmsmall' class='buttonwhitecomb' size=13></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Big Image</td>";
				echo"<td><input type='file' name='txtnmbig' class='buttonwhitecomb' size=13></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td>&nbsp; </td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>PDF Upload</td>";
				echo"<td><input type='file' name='file_img' class='buttonwhitecomb' size=100></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td colspan=2 align=center class=buttonblack><input type='submit' class='buttongreen' name='buttonok' value='  Add  '</td>";
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





















































