<?php
include "../config.php";
include "index.php";
?>
	<form action='changepasscheck.php' method='get' name="changepass" onSubmit="return check()">
		<table border=0 align=center class='BorderOfTable'>
			<tr>
				<td class=bigboldblack>User Id</td>
				<?php echo"<td><input type='text' class='buttonwhitecomb' disabled name='txtid' value=".$_SESSION['adminname']."></td>";?>
					  <input type="hidden" name="user" value="change">
			</tr>
			<tr>
				<td class=bigboldblack>New Password</td>
				<td><input type='password' class='buttonwhitecomb' name='txtpass'></td>
			</tr>
			<tr>
				<td class=bigboldblack>Confirm Password</td>
				<td><input type='password' class='buttonwhitecomb' name='txtcpass'></td>
			</tr>	
		</table>
		<table align="center" width="283">
			<tr>
				<td colspan=2 align=center class="borderoftable"><input type='submit' class='buttongreen' name='buttonok' value='  Change  '></td>
			</tr>	
		</table>
	</form>


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
<script language="JavaScript">
function check()
{
	var pass=document.changepass.txtpass.value;
	var cpass=document.changepass.txtcpass.value;
	
	if(pass!=cpass)
	{
		alert("Password And Confirm Password don't match !");
		return false;
	}
	if(pass=="")
	{
		alert("Password must not be empty !");
		return false;
	}
	return true;
}
</script>