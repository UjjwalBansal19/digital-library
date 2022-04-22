<?php
include "index.php";
?>
<?php
if($_GET['name']=='backup')
{
?>
<form action="backup1.php" method="post" name="check">
	<table align="center" class="borderoftable" width="200" >
		<tr>
		<input type="hidden" name="check" value="backup">
			<td colspan="4" height="30" class="buttonwhite" align="center"><font class="bigboldorange">Backup Tables</font></td>
		</tr>
		<tr>
			<td colspan="2" height="15" class="buttonwhite" align="left"></td>
		</tr>
		<?php
		$count=0;
		$res=mysql_query("select * from backup");
		echo"<tr class='infoboxcontents'>";
		while($fres=mysql_fetch_array($res))
		{
			if($count%2==0)
			{
				echo"</tr><tr class='infoboxcontents'>";
			}
				$a=$count+1;
				echo"<td class='buttonwhite'>".$a."</td>";
				echo"<td class='buttonwhite'>".$fres[0]."</td>";
				$count++;
		}
		?>
		<!--<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="Student" value="Student">Student</td>
			<td class="buttonwhite"><input type="checkbox" name="book" value="book">book</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="order_master" value="order_master"> Order_Master</td>
			<td class="buttonwhite"><input type="checkbox" name="order_detail" value="order_detail"> Order_Detail</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="category_master" value="category_master"> Category_master</td>
			<td class="buttonwhite"><input type="checkbox" name="Subcategory" value="subcategory"> Subcategory</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="viewcart" value="viewcart">Viewcart</td>
			<td class="buttonwhite"><input type="checkbox" name="stock" value="stock"> Stock</td>
		</tr>-->
		<tr>
			<td colspan="4" height="15"><hr></td>
		</tr>
		<tr>
			<td colspan="4" align="left" class="bigblack"><input type="radio" checked name="backupone" value="single">Backup Single Table</td>
		</tr>
		<tr>
			<td colspan="2" align="right" class="bigblack">Table Name:</td>
			<td colspan="2" align="left"><input type="text" class="buttonwhite" name="txtbackupdata"></td>
		</tr>
		<tr>
			<td colspan="4" align="left" class="bigblack"><input type="radio" name="backupone" value="all">Backup All Table</td>
		</tr>
		<tr>
			<td colspan="4" height="15"><hr></td>
		</tr>
		<tr>
			<td colspan="4" height="30" class="buttonwhite" align="center"><input type="submit" class="buttonblack" value="  Backup  "></td>
		</tr>
	</table>
</form>
	<?php
}
else
{
?>
<form action="backup1.php" method="get" name="check">
	<table align="center" class="borderoftable" width="200">
		<tr>
			<td colspan="4" height="30" class="buttonwhite" align="center"><font class="bigboldorange">Restore Tables</font></td>
		</tr>
		<tr>
			<td colspan="2" height="15" class="buttonwhite" align="left"></td>
		</tr>
		<?php
		$count=0;
		$res=mysql_query("select * from backup");
		echo"<tr class='infoboxcontents'>";
		while($fres=mysql_fetch_array($res))
		{
			if($count%2==0)
			{
				echo"</tr><tr class='infoboxcontents'>";
			}
				$a=$count+1;
				echo"<td class='buttonwhite'>".$a."</td>";
				echo"<td class='buttonwhite'>".$fres[0]."</td>";
				$count++;
		}
		?>
		<!--<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="admin" value="admin">Admin </td>
			<td class="buttonwhite"><input type="checkbox" name="user_info" value="user_info"> User_info</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="Student" value="Student">Student</td>
			<td class="buttonwhite"><input type="checkbox" name="book" value="book">book</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="order_master" value="order_master"> Order_Master</td>
			<td class="buttonwhite"><input type="checkbox" name="order_detail" value="order_detail"> Order_Detail</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="category_master" value="category_master"> Category_master</td>
			<td class="buttonwhite"><input type="checkbox" name="Subcategory" value="subcategory"> Subcategory</td>
		</tr>
		<tr class="infoboxcontents">
			<td class="buttonwhite"><input type="checkbox" name="viewcart" value="viewcart">Viewcart</td>
			<td class="buttonwhite"><input type="checkbox" name="stock" value="stock"> Stock</td>
		</tr>-->
		<tr>
			<td colspan="4" height="15"><hr></td>
		</tr>
		<tr>
			<td colspan="4" align="left" class="bigblack"><input type="radio" checked name="restoreone" value="single">Restore Single Table</td>
		</tr>
		<tr>
			<td colspan="2" align="right" class="bigblack">Table Name:</td>
			<td colspan="2" align="left"><input type="text" class="buttonwhite" name="txtrestoredata"></td>
		</tr>
		<tr>
			<td colspan="4" align="left" class="bigblack"><input type="radio" name="restoreone" value="all">Restore All Table</td>
		</tr>
		<tr>
			<td colspan="4" height="15"><hr></td>
		</tr>
		<tr>
			<td colspan="4" height="30" class="buttonwhite" align="center"><input type="submit" class="buttonblack" value="  Restore  "></td>
		</tr>
	</table>
</form>
<?php
}
?>
<!--<script language="JavaScript">
function checkitem()
	{
	
		var a=0;
		for(a=0;a<window.document.check.elements.length;a++)
		{
			if(window.document.check.elements[a].type=="checkbox")
			{
				window.document.check.elements[a].checked=true;
			}
		}
	}
	function uncheckitem()
	{
		var a=0;
		for(a=0;awindow.document.check.elements.length;a++)
		{
			if(window.document.check.elements[a].type=="checkbox")
			{
				window.document.check.elements[a].checked=false;			
			}
		}
		return false;
	}
</script>-->