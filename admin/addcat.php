<?php
include "index.php";

	echo"<form action='addcat1.php' method='get'>";
		echo"<table border=0 align=center class='BorderOfTable'>";
			echo"<tr>";
				echo"<td colspan=2 class=bigboldblack align=center><font color='#FF0000' size='1'>".$_GET['valid']."</font></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category id</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtid'></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category name</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtnm'></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Category type</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txttp'></td>";
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