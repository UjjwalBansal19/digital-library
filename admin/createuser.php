<?php
include "../config.php";
include "index.php";
?>
	<form action='changepasscheck.php' method='get' name="changepass" >
	
		
  <table border=0 align=center class='BorderOfTable'>
  <?php
  if($_GET['valid']!="")
	{
    echo"<tr>";
       echo"<td align=center colspan=2 class=bigboldblack><font color='#FF0000' face='tahoma' size='1'>".$valid."</font></td>"; 
    echo"</tr>";
	}
	else
	{
	?>
    <tr> 
      <td align="center" colspan="2" class=bigboldorange>Create New Administrator</td>
    </tr>
	<?php
	}
	?>
    <tr> 
      <td align="center" colspan="2" ><hr></td>
    </tr>
    <tr> 
      <td class=bigboldblack>User Id</td>
      <td><input type='text' class='buttonwhitecomb' name='txtid' value=<?php echo $_GET['user'];?>></td>
	  <input type="hidden" name="user" value="user">
    </tr>
    <tr> 
      <td class=bigboldblack>Password</td>
      <td><input type='password' class='buttonwhitecomb' name='txtpass'></td>
    </tr>
  </table>
		<table align="center" width="230">
			<tr>
				<td colspan=2 align=center class="borderoftable"><input type='submit' class='buttongreen' name='buttonok' value='  Create  '></td>
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
