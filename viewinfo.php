<?php
include "config.php";
include "headerpg.php";
$query="select * from user_info where userid='".$_SESSION['uname']."'";
$res=mysql_query($query);
$fres=mysql_fetch_array($res);
$txtfname=$fres['f_name'];
$txtlname=$fres['l_name'];
$txtgen=$fres['gender'];
$txtemail=$fres['e_mail'];
$txtpublisher=$fres['comp_nm'];
$txtaddress=$fres['street_add'];
$txtpostcode=$fres['post_code'];
$txtcity=$fres['city'];
$txtstate=$fres['state'];
$txtcountry=$fres['country'];
$txtnewsletter=$fres['news'];
$txtuid=$fres['userid'];
$txtfax=$fres['fax_no'];
$txttelephone=$fres['tele_no'];
$txtsque=$fres['sque'];
$txtsans=$fres['sans'];
?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
      
<td valign="top"> 
  <?php
if($_SESSION['uname']=="")
{
	echo "<blockquote><table border='0' cellpadding='0' cellspacing='0' height=200>";
		echo "<tr>";
			echo "<td align=left class=bigorange><b>To view your inforrmation please login at </b><a href='login.php' class=biggreen>login</a> <b>page.</b></td>";
		echo "</tr></table></blockquote>";
		echo "</td>";
		include "footerpg.php";
		exit;

}
?>
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr > 
        <td><table border="0" align="center">
            <tr> 
              <td width='400' class='bigboldorange'>Your Account Information</td>
            </tr>
            <tr> 
              <td height="10" align="center"><hr></td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td> <table width="400" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td colspan="2" class="bigboldgreen" height="30">Your Personal Details</td>
              <td width="70"><a href="editinfo.php?key=personal" class="bigorange">Edit</a></td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td><table  border="0" cellpadding="2" cellspacing="1" class="infoBox" width="350" >
            <tbody>
              <tr  class="infoBoxContents"> 
                <td> <table border="0" cellpadding="2" cellspacing="2" align="left">
                    <tbody>
                      <tr> 
                        <td class="bigorange">First Name:</td>
                        <td class="smallboldblack"><?php echo $txtfname; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Last Name:</td>
                        <td class="smallboldblack"><?php echo $txtlname; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Gender:</td>
                        <td class="smallboldblack"><?php echo $txtgen; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Date of Birth:</td>
                        <td><font color="#FF0000" size="1">For Security Purpose.</font></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">E-Mail Address:</td>
                        <td class="smallboldblack"><?php echo $txtemail; ?></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
      </tr>
      <tr> 
        <td class="bigboldgreen" height="30">publisher Details</td>
      </tr>
      <tr> 
        <td><table border="0" cellpadding="2" cellspacing="1" class="infoBox" width="350">
            <tbody>
              <tr class="infoBoxContents"> 
                <td><table border="0" cellpadding="2" cellspacing="2" align="left">
                    <tbody>
                      <tr> 
                        <td class="bigorange">publisher Name:</td>
                        <td class="smallboldblack"><?php echo $txtpublisher; ?></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
		</tr>
      <tr> 
        <td> <table width="400" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td colspan="2" class="bigboldgreen" height="30">Contact Information</td>
              <td width="70"><a href="editinfo.php?key=contact" class="bigorange">Edit</a></td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td><table border="0" cellpadding="2" cellspacing="1" class="infoBox" width="350">
            <tbody>
              <tr class="infoBoxContents"> 
                <td height="175"><table border="0" cellpadding="2" cellspacing="2">
                    <tbody>
                      <tr> 
                        <td class="bigorange">Street Address:</td>
                        <td class="smallboldblack"><?php echo $txtaddress; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Post Code:</td>
                        <td class="smallboldblack"><?php echo $txtpostcode; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">City:</td>
                        <td class="smallboldblack"><?php echo $txtcity; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">State/Province:</td>
                        <td class="smallboldblack"><?php echo $txtstate; ?></td>
                      </tr>
                      <tr> 
                        <td height="46" class="bigorange">Country:</td>
                        <td class="smallboldblack"><?php echo $txtcountry; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Telephone Number:</td>
                        <td class="smallboldblack"><?php echo $txttelephone; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Fax Number:</td>
                        <td class="smallboldblack"><?php echo $txtfax; ?></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr> 
        <td class="bigboldgreen" height="30">Options</td>
      </tr>
      <tr> 
        <td><table  border="0" cellpadding="2" cellspacing="1" class="infoBox" width="350">
            <tbody>
              <tr class="infoBoxContents"> 
                <td><table border="0" cellpadding="2" cellspacing="2">
                    <tbody>
                      <tr> 
                        <td class="bigorange">Newsletter:</td>
                        <?php
							  	if($txtnewsletter==1)
								{
									$newsletter="Yes";
								}
								else
								{
									$newsletter="No";
								}
							  ?>
                        <td class="smallboldblack"><?php echo $newsletter; ?></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr> 
        <td> <table width="400" border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td colspan="2" class="bigboldgreen" height="30">User Information</td>
              <td width="70"><a href="editinfo.php?key=user" class="bigorange">Edit</a></td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td><table  border="0" cellpadding="1" cellspacing="1" class="infoBox" width="350">
            <tbody>
              <tr class="infoBoxContents"> 
                <td><table border="0" cellpadding="2" cellspacing="2">
                    <tbody>
                      <tr> 
                        <td class="bigorange">User Id:</td>
                        <td class="smallboldblack"><?php echo $txtuid; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Password:</td>
                        <td><a href="editinfo.php?key=password"><font color="#FF0000" size="1">Change Password</font></a></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Security Question:</td>
                        <td class="smallboldblack"><?php echo $txtsque; ?></td>
                      </tr>
                      <tr> 
                        <td class="bigorange">Security Answer:</td>
                        <td class="smallboldblack"><?php echo $txtsans; ?></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr> 
        <td><hr></td>
      </tr>
    </tbody>
  </table></td>
    <td valign="top" align="center" width="150">&nbsp;</td>
  </tr>
</table>
<?php
include "footerpg.php";
?>
<script language="JavaScript">
function isStr(st)
{
	validst="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var j=0;
	
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)>=0)
		{
			j++;
		}
	}
	
	if(j==st.length)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function isNumeric(st)
{
	validst="0123456789";
	var j=0;
	
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)>=0)
		{
			j++;
		}
	}
	
	if(j==st.length)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function isDate(bdt,bmn,byr)
{
		/* Checking Birthdate */
		var BDate=bdt;
		var BMonth=bmn;
		var BYear=byr;
		var CYear=((new Date()).getYear())-6;
		/*Date checking*/
		if(isNumeric(BDate)==false || (BDate<1))
		{
			alert("Please enter a valid Birth Date.");
			document.create_account.dobdd.focus();
			return false;
		}
		if(BDate=="")
		{
			alert("Birth Date cannot be empty.");
			document.create_account.dobdd.focus();
			return false;
		}
		/*Month Checking*/
		if(BMonth=="")
		{
			alert("Please select Birth Month.");
			document.create_account.dobmm.focus();
			return false;
		}
		if((isNumeric(BMonth)==false)||(BMonth>12) || (BMonth<1))
		{
			alert("Please enter valid Birth Month.");
			document.create_account.dobmm.focus();
			return false;
		}
		/*Year Checking*/
		if(isNumeric(BYear)==false)
		{
			alert("Please enter a valid Year.");
			document.create_account.dobyy.focus();
			return false;
		}
		if(BYear=="")
		{
			alert("Birth Year cannot be empty.");
			document.create_account.dobyy.focus();
			return false;
		}
		if((BYear.length<4)||(BYear>CYear)||(isNaN(BYear)==true)|| (BYear<1))
		{
			alert("Please insert a valid year.");
			document.create_account.dobyy.focus();
			return false;		
		}
		if(BMonth=="2")
		{
			if((BYear%4)==0)
			{
				if(BDate>"29")
				{
					alert("Please enter valid date.");
					document.create_account.dobdd.focus();
					return false;				
				}
			}
			else
			{
				if(BDate>"28")
				{
					alert("Please enter valid date.");
					document.create_account.dobdd.focus();
					return false;				
				}
			}
		}
		else
		{
			switch(BMonth)
			{
				case "4":
				case "6":
				case "9":
				case "11":
							if (BDate>"30")
							{
									alert("Please enter valid date.");
									document.create_account.dobdd.focus();
									return false;
							}
							break;
			}
		}
		return true;
}

function isEmail(st)
{
	validst="@.";
	var j=0;
	var posx=-1;
	var poxy=-1;
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)==0)
		{
			j++;
			posx=i;
		}
		else if (validst.indexOf(c)==1)
		{
			j++;
			posy=i;
		}
	}
	
	if(j>=validst.length && (posy-posx)>0)
	{	
		return true;	
	}
	else
	{	
		return false;	
	}
}
function userid(st)
{
	validst="_.abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	var j=0;
	if(st=="")
	{
		return false;
	}
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)>=0)
		{
			j++;
		}
	}
	if(j==st.length)
	{
		return true;
	}
	else
	{
		return false;
	}
}


// Password Validation
function isPassword(st)
{
	validst=" abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+|-=\[]{};:<>?,./";
	var j=0;
	if(st=="")
	{
		return false;
	}
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)>=0)
		{
			j++;
		}
	}
	
	if(j==st.length)
	{
		return true;
	}
	else
	{
		return false;
	}
}

// PhoneNo Validation
function isPhoneNo(st)
{
	validst="-abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	var j=0;
	
	for(i=0;i<st.length;i++)
	{
		c=st.charAt(i);
		if (validst.indexOf(c)>=0)
		{
			j++;
		}
	}
	
	if(j==st.length)
	{
		return true;
	}
	else
	{
		return false;
	}
}


function check()
{
	var fn=document.create_account.firstname.value;
	var ln=document.create_account.lastname.value;
	var bdt=document.create_account.dobdd.value;
	var bmn=document.create_account.dobmm.value;
	var byr=document.create_account.dobyy.value;
	var email=document.create_account.email_address.value;
	var Address=document.create_account.street_address.value;
	var postcode=document.create_account.postcode.value;
	var City=document.create_account.city.value;
	var State=document.create_account.state.value;
	var Country=document.create_account.country.value;
	var PNo=document.create_account.telephone.value;
	var uid=document.create_account.userid.value;
	var pass=document.create_account.password.value;
	var cpass=document.create_account.confpassword.value;

	if(fn=="")
	{
		alert("First Name cannot be empty.");
		document.create_account.firstname.focus();
		return false;
	}
	if(isStr(fn)==false)
	{
		alert("Enter Proper FirstName");
		return false;
	}
	if(ln=="")
	{
		alert("Last Name cannot be empty.");
		document.create_account.lastname.focus();
		return false;
	}
	if(isStr(ln)==false)
	{
		alert("Enter Proper LastName");
		return false;
	}
	if(isDate(bdt,bmn,byr)==false)
	{
		return false;
	}	
	if(isEmail(email)==false)
	{
		alert("Enter Proper Email Address");
		document.create_account.email_address.focus();
		return false;
	}
	if(Address=="")
	{
		alert("Address cannot be empty.");
		document.create_account.street_address.focus();
		return false;
	}
	if(postcode=="")
	{
		alert("PostalCode cannot be empty.");
		document.create_account.postcode.focus();
		return false;
	}
	if(City=="")
	{
		alert("City cannot be empty.");
		document.create_account.city.focus();
		return false;
	}
	if(isStr(City)==false)
	{
		alert("Please enter City properly.");
		document.create_account.city.focus();
		return false;
	}
	if(State=="")
	{
		alert("State cannot be empty.");
		document.create_account.state.focus();
		return false;
	}
	if(isStr(State)==false)
	{
		alert("Please enter State properly.");
		document.create_account.state.focus();
		return false;
	}
	if(Country=="")
	{
		alert("Please select Country from the list.");
		document.create_account.country.focus();
		return false;
	}
	if(PNo=="")
	{
		alert("Phone no can not be empty");
		document.create_account.telephone.focus();
		return false;
	}
	if (isPhoneNo(PNo)==false)
	{
		alert("Please Enter valid Phone Number.");
		document.create_account.telephone.focus();
		return false;	
	}
	if(userid(uid)==false)
	{
		alert("Enter Proper UserId");
		document.create_account.userid.focus();
		return false;
	}
	if(isPassword(pass)==false)
	{
		alert("Enter Proper Password");
		document.create_account.password.focus();
		return false;
	}
	if(pass!=cpass)
	{
		alert("Passwords do not match.");
		document.create_account.password.value="";
		document.create_account.confpassword.value="";
		document.create_account.password.focus();
		return false;
	}
}
</script>
