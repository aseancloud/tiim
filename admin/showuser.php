<?
require_once "../connect_db.php";
require_once "validate_user.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script>
// check all /uncheck
function checkall(formname,checkname,thestate){
var el_collection=eval("document.forms."+formname)
for (c=0;c<el_collection.length;c++)
{
	if(el_collection[c].type=='checkbox') el_collection[c].checked=thestate;
}
}
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="stylesheets.css" rel="stylesheet" type="text/css" />
<title>TIIM Conference 2009</title>

<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #0099FF;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<form action="" method="post" name="select">
  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="admin_table" table="table">
    <tr valign="top">
      <th width="13%" height="14" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
      <th width="37%" bgcolor="#DEDBDE" scope="col"><div align="center">First Name</div></th>
      <th width="32%" bgcolor="#DEDBDE" scope="col"><div align="center">Last Name</div></th>     
      <th width="18%" bgcolor="#DEDBDE" scope="col"><div align="center">Email</div></th>
    </tr>
    <?

require_once "../connect_db.php";
       
$sql = " SELECT * FROM tiim_user order by first_name  , last_name  ";

$result = mysql_query($sql) or die(mysql_error());

$flag=1;
$no=0; 
while ($row = mysql_fetch_assoc($result)) {
     if ($flag==-1) echo '<tr valign="top" bgcolor="#EFEFEF">'; ?>
  	<td><input type="checkbox" name="checkbox[<?=$no?>]" value="<?=$row['email'];?>" />	</td>
	<td>	<? echo $row['first_name'];?></td>
	<td><? echo $row['last_name']; ?></td>
	<td><? echo $row['email']; ?></td>
	
<?	
	echo '</tr>';
	$flag = $flag * -1;
	$no++; ?>
	
	<?
} 
?>
<tr>
	<td width="13%" height="22">
	  <div align="right"><IMG  height=22 src="../images/arrow_ltr.png" width=35>        </div>
	</td>
	  <td width="37%"  >&nbsp;&nbsp;<a href="javascript:checkall('select','checkbox',true)">Check All</a> / <a href="javascript:checkall('select','checkbox',false)">Uncheck All</a>	    </td>
	  <td colspan="2" >&nbsp;</td>
    </tr>
  </table>
 <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
 <td>
 
 </tr>
   <tr>
     <td>
 <input type="submit" name="Submit" value="Submit"   />
 
 <!-- <input type="submit" name="Submit" value="Submit"  onClick="opener.document.all.to.value=document.all.select.value;window.close();"> -->

</td>
   </tr>
 </table>
</form>
<?
  if($checkbox<>""){	
  $numuser=0;
for($i=0;$i<$no;$i++)
	{    
			if($checkbox[$i]<>""){				
			$user=$user."".$checkbox[$i].",";	
			$numuser++;		
				}		
	} ?>
	<script language='JavaScript'>
opener.location = 'main.php?sys=3&&user=<?=$user; ?>&&numuser=<?=$numuser; ?>';
window.setTimeout('window.close()');
</script>
<?
} ?>


</body>
</html>
