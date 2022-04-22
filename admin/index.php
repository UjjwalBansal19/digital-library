<?php
include "config.php";
if($_SESSION['adminname']=="")
{
	header("location:login.php?valid=Please Login to enter administrative area!");
	exit;
}
?>
<link href="../style.css" rel="stylesheet" type="text/css">

<table align='center' border='0' cellpadding='0' cellspacing='0' width='700' class="BorderOfTable">
	<tr>
		<td>
			<table align='left' border='0' width='100%'>
				<tr>
					<td colspan='4' align="left" height="25"><img src="image/logo.gif"></td>
				</tr>
				<tr>
					<td colspan='4'><hr></td>
				</tr>
		<?php
			if(isset($_SESSION['adminname']))
			{
				echo"<tr><td colspan='5' align='right' height='25' class='bigboldgreen'><a class='bigboldorange' href='logoff.php'>Logout</a>";
				//echo "&nbsp;&nbsp;&nbsp;<a class='bigboldorange' href='../index.php'>WebSite</td></tr>";
			}
		?>
				<tr>
					<td colspan='4'><hr></td>
				</tr>
				<tr>
					<td width='150' valign="top">
						<table align='left' border=0 class="BorderOfTable" width="100%">
							<tr>
								<td class="bigboldorangeul" colspan=2>ADD</td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='addcat.php' class='bigboldgreen_ul'>Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='addsubcat.php' class='bigboldgreen_ul'>Sub Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='addbook.php' class='bigboldgreen_ul'>book</a></td>
							</tr>
							<tr>
								<td colspan=2 class="bigboldorangeul">UPDATE</td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='updatecatlist.php?pgno=1' class='bigboldgreen_ul'>Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='updatesubcatlist.php?pgno=1' class='bigboldgreen_ul'>Sub Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='booklist.php?pgno=1' class='bigboldgreen_ul'>book</a></td>
							</tr>
							<tr>
								<td colspan=2 class="bigboldorangeul">DELETE</td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='deletecatlist.php?pgno=1' class='bigboldgreen_ul'>Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='deletesubcatlist.php?pgno=1' class='bigboldgreen_ul'>Sub Category</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='deletebooklist.php?pgno=1' class='bigboldgreen_ul'>book</a></td>
							</tr>
							<tr>
								<td colspan=2 class="bigboldorangeul">USER SETTINGS</td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='changepass.php' class='bigboldgreen_ul'>Change Password</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='createuser.php?name=createuser' class='bigboldgreen_ul'>Create User</a></td>
							</tr>
							<tr>
								<td colspan=2 class="bigboldorangeul">REPORTS</td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td><a href='toptenbook.php' class='bigboldgreen_ul'>By book</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='toptenuser.php' class='bigboldgreen_ul'>By User</a></td>
							</tr>
							<tr>
								<td width=20><img src="image/bullets/orange.bmp"></td>
								<td class='bigboldgreen'><a href='reportdate.php' class='bigboldgreen_ul'>By Date</a></td>
							</tr>
						</table>
					</td>
					<td colspan='2' align='right' valign="top">
