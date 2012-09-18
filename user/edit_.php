<?
require_once "../connect_db.php";
require_once "validate_user.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="../admin/stylesheets.css" rel="stylesheet" type="text/css" />
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
  <table width="375" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="375" align="center"><h1>Edit Co-Author</h1></td>
    </tr>
  </table>  <form action="edit.php" method="post">
  <table width="82%" border="0" align="center" cellpadding="1" cellspacing="0" class="admin_table">
    <tr><? 
	
	  $sql = " SELECT * FROM tiim_co_author where id='$id' ";
	  $result = mysql_query($sql) or die(mysql_error());
	  $row = mysql_fetch_assoc($result);	  
	 $id=$row['id'];
	
	   ?>
    </tr>
	  <tr>
      <td  width="27%"valign="top" class="field_label">Title:</td>
      <td  width="73%"valign="top">
	  <select name="title" >
                                    <option value="1" <? if ($row['title']=="1"){echo "selected";}?>>Mr.</option>
                            		<option value="2" <? if ($row['title']=="2"){echo "selected";}?>>Ms.</option>
                           		 	<option value="3" <? if ($row['title']=="3"){echo "selected";}?>>Mrs.</option>
									<option value="4" <? if ($row['title']=="4"){echo "selected";}?>>Dr.</option>
                                    </select></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#EFEFEF" class="field_label">First Name:</td>
      <td valign="top" bgcolor="#EFEFEF">
        <label>
        <input name="firstname" type="text" value="<? echo $row['firstname'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td valign="top" class="field_label">Last Name:</td>
      <td valign="top"><label>
        <input name="lastname" type="text" value="<? echo $row['lastname'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td valign="top" class="field_label" bgcolor="#EFEFEF">Email:</td>
      <td valign="top" bgcolor="#EFEFEF" ><label>
        <input name="email" type="text" value="<?=$row['email'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td valign="top"  class="field_label">Telephon:</td>
      <td valign="top" ><input name="telephone" type="text" value="<?=$row['telephone'] ?>" /></td>
    </tr> 
	 
</table>

<table width="420" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
      <td> </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="124"></td>
      <td width="252"><label>
	  
        <input type="submit" name="Submit" value="Save" />		
		<input name="id" type="hidden" id="id" size="25" value="<?=$row['id']?>"> 
      </label>
	   <?
	  
	 	  if($Submit<>"")
	  	  { 	  
	  	$sql1 = "UPDATE tiim_co_author SET 	  title='$title',firstname='$firstname',lastname='$lastname',email='$email' ,telephone='$telephone' where id='$id' ";

		$result1 = @mysql_query($sql1) or die(mysql_error(ไม่ได้));
		echo "<script>window.close()</script>"; ?>
	    <script>opener.location.reload()</script>  
	 <? } ?>
	  </td>
      <td width="44">&nbsp;</td>
    </tr>
   
  </table>
  </form>
   
</body>
</html>
