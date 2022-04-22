<?php
include "index.php";
$dfrom=$_GET['datefrom'];
$dto=$_GET['dateto'];
$query="SELECT order_id,user_id, o.book_id, date, book_name FROM order_detail o, book p, order_master WHERE o.book_id = p.book_id AND order_id IN (SELECT order_id FROM order_master WHERE date BETWEEN '".$dfrom."' AND '".$dto."') order by o.order_id";
$res=mysql_query($query);
?>
<table align="center">
	<tr>
		<td height="30"></td>	
	</tr>
</table>
<table align="center" class="borderoftable">
	<tr>
		<td colspan="6" height="30" align="center" class="buttonwhite"><font class="bigboldorange">Result By Date</font></td>	
	</tr>
	<tr>
		<td class="buttonwhite"><font class="bigboldgreen">No.</font></td>	
		<td class="buttonwhite"><font class="bigboldgreen">Order Id</font></td>	
		<td class="buttonwhite"><font class="bigboldgreen">User Id</font></td>	
		<td class="buttonwhite"><font class="bigboldgreen">book Id</font></td>	
		<td class="buttonwhite"><font class="bigboldgreen">book Name</font></td>	
		<td class="buttonwhite"><font class="bigboldgreen">Date</font></td>	
	</tr>
<?php 
$i=1;
while($fres=mysql_fetch_array($res))
{
	echo"<tr>";
	echo"	<td class='buttonwhite'>$i</td>";	
	echo"	<td class='buttonwhite'>".$fres['order_id']."</td>";
	echo"	<td class='buttonwhite'>".$fres['user_id']."</td>";	
	echo"	<td class='buttonwhite'>".$fres['book_id']."</td>";	
	echo"	<td class='buttonwhite'>".$fres['book_name']."</td>";	
	echo"	<td class='buttonwhite'>".$fres['date']."</td>";	
	echo"</tr>";
	$i++;
}
?>
</table>