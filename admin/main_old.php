<?
require_once "validate_user.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<title>TIIM Conferecne 2009</title>
<link href="../admin_stylesheets.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
window.open(theURL,winName,features);
}
//-->
</script>


</head>

<body onload="MM_preloadImages('../images/btn_search_h.png')">
<div id="container">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0" class="h" bgcolor="#FFFFFF">
  <tr>
    <td width="10" align="left" valign="top" background="../images/shadow_left_bg.png"><img src="../images/shadow_left.png" /></td>
    <td width="746" align="left" valign="top" class="h"><table width="746" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    	<td bgcolor="#666666"><a name="toppage" id="toppage"></a><img src="../images/header_admin.jpg" width="950" /></td>
    </tr>
      <tr>
        <td class="topbar" align="right">
        		<span class="top_time">
					<script type="text/javascript">
                    <!--
                    var dayarray=new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")
                    var montharray=new Array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC")
                    var currentDay = new Date()
                    var month = currentDay.getMonth() + 1
                    var day = currentDay.getDate()
                    var year = currentDay.getFullYear()
                    var date = currentDay.getDay()
                    document.write(dayarray[date] + " " + day + " " + montharray[month-1] + " " + year)
                    //-->
                    </script>
         		</span>
                <span class="top_menu">Administrator Welcome: <b><? echo $username;?></b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; <b><a class="links" href="logout.php">Log out</a></b></span>
         </td>
      </tr>
      <tr>
        <td class="admin_page">
             <!--     admin content     -->
            
          <h1>Administrator Backend</h1>
          <div class="admin_box">
          <ul class="admin_ul">
          		<!--
				<li class="admin_li"><a href="#userlist">User List</a></li>
                <li class="admin_li"><a href="#paperlist">Paper List</a></li>
                <li class="admin_li"><a href="#mailsystem">Mail System</a></li>
				-->
				<li class="admin_li"><a href="main.php?sys=1">User List</a></li>
                <li class="admin_li"><a href="main.php?sys=2">Paper List</a>
                  <ul>
                    <li>Abstract List</li>
                    <li>Full Paper List  </li>
                  </ul>
                </li>
				<li class="admin_li"><a href="main.php?sys=4">Payment List</a></li>
                <li class="admin_li"><a href="main.php?sys=3">Mail System</a></li>				
              </ul>
            </div>
            <? if($sys==1 || $sys==""){?>		
            <p>&nbsp;</p>
            <h1>User List<a name="userlist" id="userlist"></a><br />
            </h1>
      <table table width="100%" border="0" cellspacing="0" cellpadding="0" class="admin_table">
  <tr valign="top">
    <th bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
	<th bgcolor="#DEDBDE" scope="col"><div align="center">First Name</div></th>
    <th bgcolor="#DEDBDE" scope="col"><div align="center">Last Name</div></th>
    <th bgcolor="#DEDBDE" scope="col"><div align="center">Title</div></th>
    <th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>
<!-- <th bgcolor="#DEDBDE" scope="col"><div align="center">Address</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">City</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">Postal Code</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">State Province</div></th> -->
    <th bgcolor="#DEDBDE" scope="col"><div align="center">Country</div></th>
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">Phone</div></th> -->
 <!--   <th bgcolor="#DEDBDE" scope="col"><div align="center">Fax</div></th> -->
    <th bgcolor="#DEDBDE" scope="col"><div align="center">Email</div></th>
	<th bgcolor="#DEDBDE" scope="col"><div align="center">View</div></th>	
  </tr>
<?

require_once "../connect_db.php";
       
$sql = " SELECT * FROM tiim_user ";

$result = mysql_query($sql) or die(mysql_error());

$flag=1;
$no=1; 
while ($row = mysql_fetch_assoc($result)) {
    if ($flag==-1) echo '<tr valign="top" bgcolor="#EFEFEF">'; 
	else echo '<tr valign="top" >';                         
	echo '<td nowrap="nowrap">'.$no.'</td>';
    echo '<td nowrap="nowrap"><a href="main.php?sys=2&user='.$row['email'].'">'.$row['status'].'. '.$row['first_name'].'</a></td>';
    echo '<td><a href="main.php?sys=2&user='.$row['email'].'">'.$row['last_name'].'</a></td>';
	echo '<td>'.$row['title'].'</td>';
	echo '<td>'.$row['institution'].'</td>';
	//echo '<td>'.$row['address'].'</td>';
	//echo '<td>'.$row['city'].'</td>';	
	//echo '<td>'.$row['postal_code'].'</td>';	
	//echo '<td>'.$row['state_province'].'</td>';	
	echo '<td>'.$row['country'].'</td>';	
//	echo '<td>'.$row['phone'].'</td>';	
//	echo '<td>'.$row['fax'].'</td>';	
	echo '<td nowrap="nowrap">'.$row['email'].'</td>';	 	
	$email=$row['email']; ?><td><?
		echo  "<a href=\"javascript:;\" onclick=\"window.open('detail.php?email=$email','show','toolbar=0,location=0,directories=0,status=0,menubar=0,resizeable=0,scrollbars=0 ,height=400,width=480');\" > <img src='../images/view.gif' width='15' height='15' border='0' ></a> ";  
	//	echo '<td >'   ."<img src='../images/view.gif'>". '</td>'; //บรรทัดโชว์รูปได้	
	?></td>
	
	
 <?
	echo '</tr>';
	$flag = $flag * -1;
	$no++;
}

?>
     
      <tr>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>		
 <!--       <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>      -->
      </tr>
    </table>	
	<? }?>
	<? if($sys==2){?>
<p>&nbsp;</p>
<h1>Paper List<a name="paperlist" id="paperlist"></a></h1>
            
<?
require_once "../connect_db.php";
if($user==""){
$sql = " SELECT * FROM tiim_user";
}else{
$sql = " SELECT * FROM tiim_user WHERE email = '".$user."'";
}
//echo $sql;
$result = mysql_query($sql) or die(mysql_error());

/*
function show_paperlist($username,$status,$first_name,$last_name){
	require_once "../connect_db.php";
		   
	$sql = " SELECT * FROM tiim_paper WHERE register_name = '".$username."' ORDER BY project_name, institution ,date ";
	
	$result = mysql_query($sql) or die(mysql_error());
	
	echo '<a name="'.$username.'"></a><table width="95%" class="admin_table" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <th colspan="7" bgcolor="#CEE7E7" scope="col">  '.$username.' -- '.$status.'. '.$first_name.' '.$last_name.'</th><th bgcolor="#CEE7E7" scope="col" align="right"> <a href="#toppage">Go to top</a> </th>';
		echo'</tr>';
	echo '<tr bgcolor="#EEEEEE">
        <td>&nbsp;</td>
        <td>Project</td>
        <td>Instition</td>
        <td>Date</td>
        <td>Document</td>
        <td>Status</td>
        <td>Payment</td>
        <td>&nbsp;</td>
      </tr>';
	
	while ($row = mysql_fetch_assoc($result)) {
		echo '<form name="form'.$username.$row['date'].'" method="post" action="paperlist_save.php">';
		echo '<tr>';
		echo '<td>&nbsp;</td>';
		echo '<td>'.$row['project_name'].'</td>';
		echo '<td>'.$row['institution'].'</td>';
		echo '<td>'.$row['date'].'</td>';
		echo '<td>';

		if ($row['abstract'] !='')	echo '&nbsp;<a href="../user/uploads/'.$username.'/abstract/'.$row['abstract'].'" target="_blank">Abstract</a>&nbsp;';
		
		if ($row['full_paper'] !='')	echo '&nbsp;<a href="../user/uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';

		echo '</td>'; 

		echo '<td><select name="status"><option></option>';
		if ($row['status']=='New') echo '<option selected="selected">New</option>';
    	else echo '<option>New</option>';
		if ($row['status']=='Approved') echo '<option selected="selected">Approved</option>';
    	else echo '<option>Approved</option>';
		if ($row['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
    	else echo '<option>Rejected</option>';		
  		echo '</select>&nbsp;</td>';

		echo '<td><select name="payment"><option></option>';
		if ($row['payment']=='Paid') echo '<option selected="selected">Paid</option>';
    	else echo '<option>Paid</option>';
		if ($row['payment']=='Not paid') echo '<option selected="selected">Not paid</option>';
    	else echo '<option>Not paid</option>';	
  		echo '</select>&nbsp;</td>';
		
		echo '<td><input type="submit" value="Save this row"></td>';
		echo '<input type="hidden" name="register_name" value="'.$username.'">';
		echo '<input type="hidden" name="project" value="'.$row['project_name'].'">';
		echo '<input type="hidden" name="institution" value="'.$row['institution'].'">';
		echo '<input type="hidden" name="date" value="'.$row['date'].'">';
		echo '<input type="hidden" name="abstract" value="'.$row['abstract'].'">';
		echo '<input type="hidden" name="full_paper" value="'.$row['full_paper'].'">';
		echo '</tr>';
		echo '</form>';
	}
	
	echo '<tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       	<td>&nbsp;</td>		
      </tr>
    </table>';

}
*/
// show_paperlist
function show_paperlist($username,$status,$first_name,$last_name){
	require_once "../connect_db.php";
	$sql = " SELECT * FROM tiim_paper WHERE register_name = '".$username."'";
	//echo  $sql;
	
	$result = @mysql_query($sql) or die(mysql_error());
	
	if(@mysql_num_rows($result)==0){
		//echo "No Data.";	
	}
	
	while ($row = @mysql_fetch_array($result)) {
	?>
	<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <th width="30%" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
        <th width="70%" bgcolor="#DEDBDE" scope="col"><div align="center">Detail</div></th>       
      </tr>
	  <tr>
	  	<td>Username</td>
		<td><? echo $username;?></td>
	  </tr>
	  <tr>
	  	<td>Paper Code</td>
		<td><? echo $row['project_name'];?></td>
	  </tr>
	  <tr>
	  	<td>Paper Title</td>
		<td><? echo $row['description'];?></td>
	  </tr>
	  <tr>
	    <td>Institution</td>
	    <td><? echo $row['institution'];?></td>
	    </tr>
	  <tr>
	    <td>Date</td>
	    <td><? echo $row['date'];?></td>
	    </tr>
	  <tr>
	    <td>Payment</td>
	    <td><? echo $row['payment'];?></td>
	    </tr>
	  </table>
	<br />
	
		<!-- Co Author -->  
		
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
		  <tr>
			<th bgcolor="#DEDBDE" scope="col" width="50%"><div align="center"><strong>Co Authors</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Paper Name</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Telephone</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Document</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Status</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Email</div></th>
		  </tr>
		  <?
		  $sql4 = " SELECT * FROM tiim_co_author  WHERE ref_id = '".$row['id']."'";
		
		$result4 = @mysql_query($sql4) or die(mysql_error());
		
		while ($row4 = @mysql_fetch_assoc($result4)) {
			switch ($row4['title']) {
				case 0:
					$t="";
					break;
				case 1:
					$t="Mr.";
					break;
				case 2:
					$t="Ms.";
					break;
				case 3:
					$t="Mrs.";
					break;	
				case 4:
					$t="Dr.";
					break;		
			}
			echo '<tr>';
			echo '<td>'.$t.$row4['firstname'].'  '.$row4['lastname'].'</td>';
			echo '<td>'.$row4['telephone'].'&nbsp;</td>';
			//echo '<td>'.$row['institution'].'</td>';	
			
		
			/*
			if ($row['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';
			echo '</td>'; 
			*/
			echo '<td>'.$row4['email'].'&nbsp;</td>';
			//echo '<td>'.$row['payment'].'&nbsp;</td>';
			
			echo '</tr>';
		}
	
	?>
		 
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<!--
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
				-->
		  </tr>
		</table><br />
		<!-- End co_author -->
		
		<!-- Abstract -->  
		<form name="<? echo  "form".$username.$row['date']?>" method="post" action="paperlist_save.php">
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
		  <tr>
			<th bgcolor="#DEDBDE" scope="col" width="40%"><div align="center"><strong>Abstract</strong> Document</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Paper Name</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Date</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Document</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Status</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Status</div></th>
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Action</div></th>
		  </tr>
	<?
				   
		$sql2 = " SELECT * FROM tiim_abstract_paper WHERE ref_id = '".$row['id']."'";
		
		$result2 = @mysql_query($sql2) or die(mysql_error());
		
		while ($row2 = @mysql_fetch_assoc($result2)) {
			echo '<tr>';
			//echo '<td>'.$row['register_name'].'</td>';
			//echo '<td>'.$row['project_name'].'</td>';
			//echo '<td>'.$row['institution'].'</td>';	
			
			echo '<td>';
			if ($row2['abstract'] !='')	echo '&nbsp;<a href="../user/uploads/'.$username.'/'.$row['id'].'/abstract/'.$row2['abstract'].'" target="_blank">Abstract</a>&nbsp;';
			echo '<font color=red>';
			if($row2['active'] == 0) echo ' Document has been deleted by '.$username;
			echo '</font>';
			echo '</td>'; 
			echo '<td>'.$row2['date'].'</td>';
			/*
			if ($row['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';
			echo '</td>'; 
			*/
			//echo '<td>'.$row2['status'].'&nbsp;</td>';
			//echo '<td>'.$row['payment'].'&nbsp;</td>';
			echo '<td><select name="status"><option></option>';
			if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';		
			echo '</select>&nbsp;</td>';
			
			echo '<td><input type="submit" value="Save this row"></td>';
			echo '<input type="hidden" name="abs" value="1">';
			echo '<input type="hidden" name="id" value="'.$row2['id'].'">';
			echo '<input type="hidden" name="ref_id" value="'.$row2['ref_id'].'">';
			echo '<input type="hidden" name="abstract" value="'.$row2['abstract'].'">';
			
			echo '</tr>';
		}
	
	?>
		 
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
			<td>&nbsp;</td>
			<!--
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
				-->
		  </tr>
		  <tr>
		    <td colspan="4">NOTE : Author can update abstract/full paper when the status is “Received” or “Accepted with revision” </td>
		    </tr>
		</table>
		</form>
		<br />
		<!-- End Abstract -->  

		<!-- Full Paper -->  
		<form name="<? echo  "form".$username.$row['date']?>" method="post" action="paperlist_save.php">
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
		  <tr>
			<th bgcolor="#DEDBDE" scope="col" width="40%"><div align="center"><strong>Full</strong> Document</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Paper Name</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Date</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Document</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Status</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Status</div></th>
			<th bgcolor="#DEDBDE" scope="col" width="20%"><div align="center">Action</div></th>
		  </tr>
	<?
	
	
		   
		$sql3 = " SELECT * FROM tiim_full_paper WHERE ref_id = '".$row['id']."'";
		
		$result3 = @mysql_query($sql3) or die(mysql_error());
		
		while ($row3 = @mysql_fetch_assoc($result3)) {
			echo '<tr>';
			//echo '<td>'.$row['register_name'].'</td>';
			//echo '<td>'.$row['project_name'].'</td>';
			//echo '<td>'.$row['institution'].'</td>';	
			
			echo '<td>';
			if ($row3['full_paper'] !='')	echo '&nbsp;<a href="../user/uploads/'.$username.'/'.$row['id'].'/fullpaper/'.$row3['full_paper'].'" target="_blank">Full Paper</a>&nbsp;';
			echo '</td>'; 
			echo '<td>'.$row3['date'].'</td>';
			/*
			if ($row['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';
			echo '</td>'; 
			*/
			//echo '<td>'.$row3['status'].'&nbsp;</td>';
			//echo '<td>'.$row['payment'].'&nbsp;</td>';
			echo '<td><select name="status"><option></option>';
			if ($row3['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row3['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row3['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row3['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';		
			echo '</select>&nbsp;</td>';
			
			echo '<td><input type="submit" value="Save this row"></td>';
			echo '<input type="hidden" name="full" value="1">';
			echo '<input type="hidden" name="id" value="'.$row3['id'].'">';
			echo '<input type="hidden" name="ref_id" value="'.$row3['ref_id'].'">';
			//echo '<input type="hidden" name="abstract" value="'.$row2['abstract'].'">';
			echo '<input type="hidden" name="full_paper" value="'.$row3['full_paper'].'">';
			
			echo '</tr>';
		}
	
	?>
		 
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
			<td>&nbsp;</td>
			<!--
			<td>&nbsp;</td>
		
			<td>&nbsp;</td>
			<td>&nbsp;</td>
				-->
		  </tr>
		  <tr>
		    <td colspan="4">NOTE : Author can update abstract/full paper when the status is “Received” or “Accepted with revision” </td>
		    </tr>
		</table>
		</form>
		
		<br />
		<hr width="400" align="center" /><br />

		<!-- End Full -->  
		<?
		}
		  
} // End function	

while ($row = mysql_fetch_assoc($result)) {
	show_paperlist($row['email'],$row['status'],$row['first_name'],$row['last_name']);
}


?>
<? } ?>     
<br />
<? if($sys==3){?>
<p>&nbsp;</p>


<h1>Mail System<a name="mailsystem" id="mailsystem"></a></h1>

<form id="form1" name="form1" method="post" action="mail_system.php">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="admin_table">
    <tr>
      <td>Mail to:</td>
      <td><input name="to" type="text" id="to" size="70" />      </td>
    </tr>
    <tr>
      <td>From:</td>
      <td><input name="from" type="text" id="from" size="70" /></td>
    </tr>
    <tr>
      <td>Subject:</td>
      <td><input name="subject" type="text" id="subject" size="70" /></td>
    </tr>
    <tr>
      <td>Message:</td>
      <td><textarea name="message" id="message" cols="80" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Send" />      </td>
    </tr>
  </table>
</form>
<? }?>

<? if($sys==4){?>
<p>&nbsp;</p>
<h1>Payment List<a name="paperlist" id="paperlist"></a></h1>
<?
require_once "../connect_db.php";
if($user==""){
$sql = " SELECT * FROM tiim_user";
}else{
$sql = " SELECT * FROM tiim_user WHERE email = '".$user."'";
}
//echo $sql;
$result = mysql_query($sql) or die(mysql_error());

$sql_paper = " SELECT * FROM tiim_paper";
$result_paper = mysql_query($sql_paper) or die(mysql_error());


$sql_p = " SELECT * FROM tiim_paper WHERE payment='Paid'";
$result_p = mysql_query($sql_p) or die(mysql_error());

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment [Paid] : <? echo @mysql_num_rows($result_p);?><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment [Not Paid] : <? echo  @mysql_num_rows($result_paper)-@mysql_num_rows($result_p);?><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Payment : <? echo @mysql_num_rows($result_paper);?><br />
<br />

<?

function show_paymentlist($username,$status,$first_name,$last_name){
	require_once "../connect_db.php";
	$sql = " SELECT * FROM tiim_paper WHERE register_name = '".$username."'";
	//echo  $sql;
	
	$result = @mysql_query($sql) or die(mysql_error());
	
	if(@mysql_num_rows($result)==0){
		//echo "No Data.";	
	}
	
	while ($row = @mysql_fetch_array($result)) {
	?>
	<form name="<? echo  "form".$username.$row['date']?>" method="post" action="paperlist_save.php">
	<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <th width="30%" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
        <th width="70%" bgcolor="#DEDBDE" scope="col"><div align="center">Detail</div></th>       
      </tr>
	  <tr>
	  	<td>Register name</td>
		<td><? echo $username;?></td>
	  </tr>
	  <tr>
	  	<td>Paper Code</td>
		<td><? echo $row['project_name'];?></td>
	  </tr>
	  <tr>
	  	<td>Paper Title</td>
		<td><? echo $row['description'];?></td>
	  </tr>
	  <tr>
	    <td>Institution</td>
	    <td><? echo $row['institution'];?></td>
	    </tr>
	  <tr>
	    <td>Date</td>
	    <td><? echo $row['date'];?></td>
	    </tr>
		
	  <tr>
	    <td>Payment</td>
	    <td>
		<select name="payment">
		<option></option>
		<option value="Not paid" <? if($row['payment']=="Not paid") echo "selected"?>>Not paid</option>
		<option value="Paid" <? if($row['payment']=="Paid") echo "selected"?>>Paid</option>
		</select>			</td>
	    </tr>
		<tr>
	    <td>&nbsp;</td>
	    <td>
		<input type="submit" value="Save this row">
		<input type="hidden" name="pay" value="1">
		<input type="hidden" name="id" value="<? echo $row['id'];?>">		</td>
	    </tr>
	  </table>
	  </form>
	<br />			
		<?
		}		  
} // End function	

while ($row = mysql_fetch_assoc($result)) {
	show_paymentlist($row['email'],$row['status'],$row['first_name'],$row['last_name']);
}
?>
<? }?>
            <p>&nbsp;</p>            </td>
      </tr>
    </table></td>
    <td width="10" align="left" valign="top" background="../images/shadow_right_bg.png"><img src="../images/shadow_right.png" /></td>
  </tr>
</table>
</div>

<map name="Map" id="Map"><area shape="rect" coords="10,8,57,27" href="index.html" />
</map></body>
</html>
