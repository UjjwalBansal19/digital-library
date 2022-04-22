<?php
include "headerpg.php";
$query="select * from book where book_id='".$_GET['id']."'";
$res=mysql_query($query);
$fres=mysql_fetch_array($res);
//$_SERVER['QUERY_STRING'];
?>
    <td valign="top"> 							
		<table border='0' align='center' cellpadding='0' cellspacing='0' width=450 class='BorderofTable'>
			<tr>
				<td colspan=3 valign='top' align='center' height=20><a href='#' class='bigboldorange'><?php echo $fres['book_name'];?></a></td></tr>
			<tr>
				<td  valign="top" align='center' width=100 rowspan=2><?php echo "<img src='admin/image/big/".$fres['book_bigimage']."' alt='$fres[book_bigimage]' title='' border='1' vspace='5' height='300' width='300' >";?></td>
				<td width=5 rowspan=2></td>
				<td height="100"  valign="top" class='bigblack'><?php echo $fres['prod_discription'];?></td>
			</tr>
			<tr>
				<td height="20" colspan="3" valign="middle" class='bigboldblack'>publisher : <?php echo $fres['publisher'];?></td>
			</tr>
			<tr >																				
				<td colspan='3' align='center' class='bigblack'>Price:<font color='#ff0000'> $<?php echo $fres['book_price'];?></span></font></td>
			</tr>
			<?php echo"<form name='book[]' method='post' action='addtocart.php?id=view'>";
				echo"<tr><input type='hidden' name='prod_id' value=".$fres['book_id']."><td colspan='3' align=center>&nbsp;<input name='txtqty' type='text' onFocus=this.value='' value='1' size='2' class='smallblack'>&nbsp;<input name='cmdatoc' type='submit' class='Buttonblack' value='Add To Cart'> </td>";
				echo"</tr></form>";?>
		</table>
</td>
<?php
include "footerpg.php";
?>