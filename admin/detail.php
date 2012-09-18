<?
require_once "../connect_db.php";
require_once "validate_user.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="stylesheets.css" rel="stylesheet" type="text/css" />
<title>TIIM Conference 2010</title>

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
  <table width="375" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="375"><h1 align="center"><img src="../images/title_personal_details.png" width="117" height="15" class="title_text" /></h1></td>
    </tr>
  </table>
  
  <table width="73%" border="0" align="center" cellpadding="1" cellspacing="0" class="admin_table">
    <tr><? 
	  $sql = " SELECT * FROM tiim_user where email='$email' ";
	  $result = mysql_query($sql) or die(mysql_error());
	  $row = mysql_fetch_assoc($result);	  
	   ?>
      
    </tr>
	  <tr>
      <td  width="27%"valign="top" class="field_label">Title:</td>
      <td  width="73%"valign="top"><? echo $row['title']; ?></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">Name:</td>
      <td valign="top" bgcolor="#EFEFEF"><? echo $row['status']." ".$row['first_name']."    ".$row['last_name'] ?></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">Institution:</td>
      <td valign="top"><?=$row['institution'] ?></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">Address:</td>
      <td valign="top" bgcolor="#EFEFEF"><?=$row['address'] ?></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">City:</td>
      <td valign="top"><?=$row['city'] ?></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">Postal code:</td>
      <td valign="top" bgcolor="#EFEFEF"><?=$row['postal_code'] ?></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">State/Province:</td>
      <td valign="top"><?=$row['state_province'] ?></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">Country:</td>
      <td valign="top" bgcolor="#EFEFEF"><?=$row['country'] ?></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">Phone:</td>
      <td valign="top"><?=$row['phone'] ?></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">Fax:</td>
      <td valign="top" bgcolor="#EFEFEF"><?=$row['fax'] ?></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">Email address:</td>
      <td><?=$row['email'] ?></td>
    </tr>
    <tr>
      
    </tr>  
</table>

  <table width="420" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="124">&nbsp;</td>
      <td width="252">&nbsp;</td>
      <td width="44">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="../user/main.php?ticket_id=<? echo base64_encode(base64_encode($row['email'].$row['pwd']).base64_encode($row['email'].$row['pwd']));?>&my_username=<? echo $row['email']?>&password=<? echo base64_encode(base64_encode($row['pwd']).base64_encode($row['email'].$row['pwd']))?>&username=<? echo base64_encode(base64_encode($row['email']).base64_encode($row['email'].$row['pwd']))?>&my_password=<? echo  $row['pwd']?>"  target="_blank">Edit Paper </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="javascript:window.close()">Close Window</a></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</body>
</html>
