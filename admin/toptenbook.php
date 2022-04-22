<?php
include "index.php";
	$query="select od.book_id,pd.book_name,sum(qty) as totalq from book pd,order_detail od where od.book_id=pd.book_id group by od.book_id order by totalq desc limit 0,10";
	$res=mysql_query($query);
?>	
<table align="center">
	<tr>
		<td colspan="4" height="30"> </td>
	</tr>
</table>
	<table align="center" class="borderoftable">
		<tr>
			<td colspan="4" height="30" class="buttonwhite" align="center"><font class="bigboldorange">Result</font></td>
		</tr>
		<tr>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">No.</font></td>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">book Id</font></td>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">book Name</font></td>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">Total Quentity</font></td>
		</tr>
		<?php	
		$i=1;
		while($fres=mysql_fetch_array($res))
		{
		?>
		<tr class="infoboxcontents">
			<?php 
				  echo"<td class='buttonwhite' align='center'>".$i."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['book_id']."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['book_name']."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['totalq']."</td>";
			?>
			
		</tr>
		
	<?php 
		$i++;
		}
	?>
	</table>
