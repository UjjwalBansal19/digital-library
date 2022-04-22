<?php
include "index.php";
	$query="select om.user_id,f_name,count(*) as totalu from order_master om,user_info us where om.user_id=us.userid group by om.user_id order by totalu desc limit 0,10";
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
			<td class="buttonwhite" align="center"><font class="bigboldgreen">User Id</font></td>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">User Name</font></td>
			<td class="buttonwhite" align="center"><font class="bigboldgreen">Total Order</font></td>
		</tr>
		<?php	
		$i=1;
		while($fres=mysql_fetch_array($res))
		{
		?>
		<tr class="infoboxcontents">
			<?php 
				  echo"<td class='buttonwhite' align='center'>".$i."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['user_id']."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['f_name']."</td>";
				  echo"<td class='buttonwhite' align='center'>".$fres['totalu']."</td>";
			?>
			
		</tr>
		
	<?php 
		$i++;
		}
	?>
	</table>
