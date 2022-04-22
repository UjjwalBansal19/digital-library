<?php
include "config.php";
include "index.php";

				if (isSet($_GET['pgno'])==true && $_GET['pgno']!="")
				{
					$pg=$_GET['pgno'];
					$st=10*($pg-1);
					$lim=" Limit $st,10";
				}
				else
				{
					$pg=1;
					$st=0;
					$lim=" Limit $st,10";				
				}
	$query="select * from book".$lim;
	$res=mysql_query($query);
		echo"<table border=0 align=center colspedding=2 colspecing=1>";
			echo"<tr>";
			echo "<td>";
				echo"<table border=0 align=center>";
					echo "<td>";
						echo "<table border='0' cellpadding='2' cellspacing='1' class='infoBox' width='100%'>";
							echo "<tr class='infoBoxContents'>";
								echo"<td>&nbsp;</td>";
								echo"<td class=bigboldgreen align='center'>book id</td>";
								echo"<td class=bigboldgreen align='center'>Category name</td>";
								echo"<td class=bigboldgreen align='center'>book name</td>";
								echo"<td class=bigboldgreen align='center'>book image</td>";
								echo"<td class=bigboldgreen align='center'>book price</td>";
							echo "</tr>"; 
					while($fres=mysql_fetch_array($res))
					{
						echo"<form action='admin.php' method='get'>";
						echo"<tr class='infoBoxContents'>";
							echo"<td><a href='delete_book.php?id=".$fres['book_id']."'>delete</a></td>";
							echo"<td class=buttonwhite align='center'>".$fres['book_id']."</td>";
							echo"<td class=buttonwhite align='center'>".$fres['category_name']."</td>";
							echo"<td class=buttonwhite align='center'>".$fres['book_name']."</td>";
							echo"<td class=buttonwhite align='center'>".$fres['book_image']."</td>";
							echo"<td class=buttonwhite align='center'>".$fres['book_price']."</td>";
						echo"</tr>";
						echo "</form>";
					}
				echo"</table>";
					$qry="Select count(*) as total from book";
					$res=mysql_query($qry);
					$fr=mysql_fetch_array($res);
					if($fr['total']>10)
					{
						$noofpgs=ceil(($fr['total']/10));
					}
					echo "<table cellpadding=0 cellspacing=0 border=0 width=470 align=left>";
					echo "<tr><td width=10>&nbsp;</td><td>";
					for($i=1;$i<=$noofpgs;$i++)
					{
						if($_GET['pgno']==$i)
						{
							echo "<font class='BigBoldgreen'>$i</font>&nbsp;";
						}
						else
						{
							echo "<a href='".basename($PHP_SELF)."?name=".$_GET['name']."&pgno=$i' class='Bigorange'>$i</a>&nbsp;";
						}
					}
					echo "</td><td width=30% class='SmallBoldGreen' align=right>Total books found : ".$fr['total']."</td></tr>";
					echo "</table>";

			echo"</td>";
			echo"</tr>";
		echo"</table>";
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
