<?php
include "../config.php";
include "index.php";
	echo"<form action='updatesubcat1.php' method='get'>";
		echo"<table border=0 align=center class='BorderOfTable'>";
			echo"<tr>";
				echo"<td colspan=2 class=bigboldblack align=center><font color='#FF0000' size='1'>".$_GET['valid']."</font></td>";
			echo"</tr>";
			echo"<tr>";
				echo"<td class=bigboldblack>Sub Category name</td>";
				echo"<td><input type='text' class='buttonwhitecomb' name='txtnm' value=".$_GET['catname']."></td>";
				echo"<input type='hidden' name='id' value=".$_GET['id'].">";
				echo"<input type='hidden' name='name' value=".$_GET['catname'].">";
			echo"</tr>";
			echo"<tr>";
				echo"<td colspan=2 align=center class=buttonblack><input type='submit' class='buttongreen' name='buttonok' value=' Upadate '</td>";
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