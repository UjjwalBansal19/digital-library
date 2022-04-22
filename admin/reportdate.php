<?php
include "index.php";
?>
<form method="get" action="reportdate1.php">
<table align="center" class="borderoftable">
	<tr>
		<td class="smallblack">Date From:</td>
		<td><input type="text" name="datefrom" class="buttonwhite" value="yyyy-mm-dd" onFocus="this.select()"> </td>
	</tr>
	<tr>
		<td class="smallblack">Date To:</td>
		<td><input type="text" name="dateto" value="yyyy-mm-dd" class="buttonwhite" onFocus="this.select()"></td>
	</tr>
</table>
<table align="center">
	<tr>
		<td height="30"></td>
	</tr>
</table>
<table align="center" class="borderoftable">
	<tr>
		<td width="170" align="center"><input type="submit" class="buttonblack" value=" Report "> </td>
	</tr>
</table>
</form>