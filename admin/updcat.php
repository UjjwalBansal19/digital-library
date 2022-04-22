<?php
include "config.php";
include "index.php";
	echo"<form action='updatecat1.php' method='get'>";
		echo"<table border=0 align=center class='BorderOfTable'>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category id</td>";
				echo"<input type='hidden' name='hiddenid' value='".$_GET['id']."'>";
				echo"<input type='hidden' name='hiddenpage' value='".$_GET['page']."'>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtid' disabled value='".$_GET['id']."'></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category name</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtnm' value=".$_GET['catname']."></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category type</td>";
				if($_GET['type']!=indoor)
				{
					$type="indoor";
				}
				else
				{
					$type="outdoor";
				}
				echo"<td ><select class='buttonwhitecomb' name='txttp'> <option value='".$_GET['type']."'>".$_GET['type']."</option><option value=".$type.">".$type."</option></td>";
			echo"</tr>";	
			echo"<tr>";
				echo"<td colspan=2 align=center class=buttonblack><input type='submit' class='buttongreen' name='buttonok' value='  Update  '</td>";
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