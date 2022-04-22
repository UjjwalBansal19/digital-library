
<link href="../style.css" rel="stylesheet" type="text/css"> <form method="get" action="logincheck.php">
	
	
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
		<tr>
			<td>
				<table align="center" border="0" width="100%">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>
							<table align="center" border="0" cellpadding="2" cellspacing="1" class="infoBox">
								<tr class="infoBoxContents">
									<td>
										<table align="center" border="0" cellpadding="0" cellspacing="0">
										<?php
											if(isset($_GET['valid'])!="")
											{
												echo"<tr>";
													echo"<td align='center' colspan='2'><font color='#FF0000' face='tahoma' size='1'>".$_GET['valid'] ."</font></td>";
												echo"</tr>";
											}
											else
											{
											?>
											<tr>
												<td align="center" colspan="2">&nbsp;</td>
											</tr>
											<?php
											}
											?>
											<tr>
												<td align="center" colspan="2">&nbsp;</td>
											</tr>
											<tr>
											<td class="bigboldgreen" width="50">&nbsp;</td>
											</tr>
											<tr>
												<td class="bigboldgreen">UserName</td>
												<td ><input type="text" name="txtadminun"></td>
											</tr>
											<tr>
												<td class="bigboldgreen">Password</td>
												<td><input type="password" name="txtadminpw"></td>
											</tr>
											<tr>
												<td colspan="2" align="center">&nbsp;</td>
											</tr>
											<tr>
												<td colspan="2" align="center"><input type="submit" class="Buttonblack" name="txtadminok" value="  Ok  ">&nbsp;&nbsp;&nbsp;&nbsp;<a class='bigboldorange' href='../index.php'>WebSite</td>
												
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
</form>