<?php
include "../config.php";
include "index.php";
$qry="select category_id from category_master";
$result=mysql_query($qry);
	echo"<form action='addsubcat1.php' method='get'>";
		echo"<table border=1 align=center class='BorderOfTable'>";
			echo"<tr>";
			echo"<td class=bigboldblack>Category id</td>";
			echo"<td colspan=2 class=bigboldblack align=center><font color='#FF0000' size='1'>".$_GET['valid']."</font>";		

			

			echo "<select name='cat_id'>";
			while($row=mysql_fetch_array($result))
			{
				echo "<option>".$row[0]."</option>";
			}
			echo "</select>";
			echo "</tr>";
		    echo "</td>";
	
			
				echo"<td class=bigboldblack>Sub Category name</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtnm'></td>";
				
			echo"</tr>";
			echo"<tr>";
				echo"<td colspan=2 align=center class=buttonblack><input type='submit' class='buttongreen' name='buttonok' value='  Add  '</td>";
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
</html>