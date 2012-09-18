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

<style type="text/css">
<!--
.style1 {color: #DEDBDE}
-->
</style>
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
                        <li class="admin_li"><a href="main.php?sys=2.1">Abstract List</a></li>
                        <li class="admin_li"><a href="main.php?sys=2.2">Full Paper List</a></li>
					</ul>
				<li class="admin_li"><a href="main.php?sys=4">Payment List</a></li>
                <li class="admin_li"><a href="main.php?sys=3">Mail System</a></li>				
              </ul>
            </div>
            <?  if($sys==1 || $sys==""){?>		
            <p>&nbsp;</p>
            <h1>User List<a name="userlist" id="userlist"></a></h1><br />
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
			<td width="493"> <form name="search"  action="main.php?sys=1" method="post" >Email : 
			<input name="email" type="text"  value="<? echo $email; ?>"/>
			    <label>
			    <input type="submit" name="Submit" value="Search" />
				
			    </label>
			  
			</form></td>
                <td width="381"><form action="main.php?sys=1" method="post" name="pay" id="pay">
                  <select name="select3" onchange="this.form.submit();">
                    <option value="" selected="selected">Select Payment</option>
                    <option value="Not paid"<? if($select3=="Not paid"){echo "selected";}; ?>>Not paid</option>
                    <option value="Paid"<? if($select3=="Paid"){echo "selected";}; ?>>Paid</option>
                  </select>
                </form></td>
              </tr><?

require_once "../connect_db.php";
 if($Submit<>"" || $email<>"" ){      
$query = " SELECT * FROM tiim_user  where email ='$email' ";
}
else if($select3<>""){
$query = " SELECT * FROM tiim_user  where pay ='$select3' ";
}
else  {
$query = " SELECT * FROM tiim_user ";
}
$rs = mysql_query($query) or die(mysql_error());
$totalrows=mysql_num_rows($rs);
if($page=="")
										{
										$page=1;
										}
										$limit 	= 20;  //จำนวนบรรทัดที่ต้องการให้แสดง
										$limitvalue = $page * $limit - ($limit); //1*10-10=0	
										$numofpages = ceil($totalrows / $limit); // หาจำนวนหน้า
										$from=$limit*$page-$limit+1; //จากบรรทัด
										$to=$from + $count_result-1;	//น่า่จะถึงบรรทัด
									
									
										$query .= " limit $limitvalue,$limit ";
										$rs	= mysql_query($query) or die ("select error =$query");
$flag=1;
$no=1;  ?>
            </table>        
           
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="right"><?
// ส่วนการแสดงผล
   	if($totalrows>$limit)
			{
				 $upper_limit = $page + 3;
$lower_limit = $page - 2;
 
if($page != 1){ 
$pageprev = $page - 1; 
//echo("<a href=\"$PHP_SELF?page=1&searchpayment=$searchpayment\">Begin</a>&nbsp;"); 
echo("<a href=\"$PHP_SELF?page=$pageprev&select3=$select3\">Previous</a>&nbsp;"); 

} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&select3=$select3\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&select3=$select3\">Next</a>&nbsp;"); 
//echo("&nbsp;<a href=\"$PHP_SELF?page=$numofpages&searchpayment=$searchpayment\">Last</a>&nbsp;"); 
}else{} 

//mysql_free_result($result);
		}
	?></td>
                  </tr>
                </table>
         
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

while ($row = mysql_fetch_assoc($rs)) {
	$no1=($page-1)*$limit+$no;	
    if ($flag==-1) echo '<tr valign="top" bgcolor="#EFEFEF">'; 
	else echo '<tr valign="top" >';                         
	echo '<td nowrap="nowrap">'.$no1.'</td>';
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
            <div align="right">
              <?
// ส่วนการแสดงผล
   	if($totalrows>$limit)
			{
				 $upper_limit = $page + 3;
$lower_limit = $page - 2;
 
if($page != 1){ 
$pageprev = $page - 1; 
echo("<a href=\"$PHP_SELF?page=$pageprev&searchpayment=$searchpayment\">Previous</a>&nbsp;"); 
} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&searchpayment=$searchpayment\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&searchpayment=$searchpayment\">Next</a>&nbsp;"); 
}else{} 

mysql_free_result($result);
		}
	?>
              <? } // <? if($sys==1 || $sys==""){?>		
              <? if($sys==2){?>
            </div>
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
	$sql = " SELECT * FROM tiim_paper WHERE register_name = '".$username."'  ";
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
<?  } ?>     
<br />
<? if($sys==3){?>
<p>&nbsp;</p>


<h1>Mail System<a name="mailsystem" id="mailsystem"></a></h1>

<form id="form1" name="form1" method="post" action="mail_system.php">

  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="admin_table">
    <tr>
      <td>Mail to:</td>
      <td><input name="to" type="text" id="to" size="70" readonly="" value="<? if($user<>""){ echo $user;}  ?>"  />
	<a href="javascript:MM_openBrWindow('showuser.php','','scrollbars=yes,width=600,height=600')"> Select User</a></td>
    </tr>
    <tr>
      <td>From:</td>
      <td><input name="from" type="text" id="from" value="info@tiimconference.org" size="70" /></td>
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
      <td><input type="submit" name="button" id="button" value="Send" />
	  <input name="numuser" type="hidden" value="<? echo $numuser; ?>" />	
	        </td>
    </tr>
  </table>
</form>
<? }?>

<? if($sys==4 ){?>
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

$sql_paper = " SELECT * FROM tiim_paper     ";
$result_paper = mysql_query($sql_paper) or die(mysql_error());
$sql_p = " SELECT * FROM tiim_paper,tiim_user WHERE tiim_paper.payment= 'Not Paid' and tiim_paper.register_name=tiim_user.email group by tiim_paper.register_name ";
$result_p = mysql_query($sql_p) or die(mysql_error());
$sql_p1 = " SELECT * FROM tiim_paper,tiim_user WHERE tiim_paper.payment= 'Informed Payment' and tiim_paper.register_name=tiim_user.email group by tiim_paper.register_name ";
$result_p1 = mysql_query($sql_p1) or die(mysql_error());
$sql_p2 = " SELECT * FROM tiim_paper,tiim_user WHERE tiim_paper.payment= 'Paid' and tiim_paper.register_name=tiim_user.email group by tiim_paper.register_name ";
$result_p2 = mysql_query($sql_p2) or die(mysql_error());


?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment [Not Paid] : <? echo  @mysql_num_rows($result_p);?><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment [Informed Payment] : <? echo @mysql_num_rows($result_p1);?><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment [Paid] : <? echo @mysql_num_rows($result_p2);?><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Payment : <? echo @mysql_num_rows($result);?><br />
<br />

<table width="746" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="493"><form  action="main.php?sys=4" method="post" name="search" id="search" >
      Email :
      <input name="email2" type="text"  value="<? echo $email2; ?>"/>
            <label>
            <input type="submit" name="Submit2" value="Search" />
            </label>
    </form></td>
    <td width="381"><form action="main.php?sys=4" method="post" name="searchepayment" id="searchepayment">
      <select name="select" onchange="this.form.submit();">
        <option value="" selected="selected">Select Payment</option>
        <option value="Not paid"<? if($select=="Not paid"){echo "selected";}; ?>>Not paid</option>
        <option value="Informed Payment"<? if($select=="Informed Payment"){echo "selected";}; ?>>Informed Payment</option>
        <option value="Paid"<? if($select=="Paid"){echo "selected";}; ?>>Paid</option>
      </select>
    </form></td>
  </tr>
  <?

require_once "../connect_db.php";
 ?>
</table>
<?

//function show_paymentlist($username,$status,$first_name,$last_name){
function show_paymentlist($email,$searchpayment,$page){
	  if($Submit<>"" || $email<>"" ){      
$query = " SELECT * FROM tiim_user  where email ='$email' ";
}
 else if($searchpayment<>""){      
$query = " SELECT * FROM tiim_paper, tiim_user  where tiim_user.email=tiim_paper.register_name and 
tiim_paper.payment='$searchpayment' group by tiim_paper.register_name  ";
}
else  {
$query = " SELECT * FROM tiim_user ";
}
$rs = mysql_query($query) or die(mysql_error());
$totalrows=mysql_num_rows($rs);
if($page=="")
										{
										$page=1;
										}
										$limit 	= 20;  //จำนวนบรรทัดที่ต้องการให้แสดง
										$limitvalue = $page * $limit - ($limit); //1*10-10=0
										$numofpages = ceil($totalrows / $limit); // หาจำนวนหน้า
										$from=$limit*$page-$limit+1; //จากบรรทัด
										$to=$from + $count_result-1;	//น่า่จะถึงบรรทัด
									
									
										$query .= " limit $limitvalue,$limit ";	
										$rs	= mysql_query($query) or die ("select error =$query");

$no=1; 
	 ?>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right"><?
// ส่วนการแสดงผล
   	if($totalrows>$limit)
			{
				 $upper_limit = $page + 3;
$lower_limit = $page - 2;
 
if($page != 1){ 
$pageprev = $page - 1; 
//echo("<a href=\"$PHP_SELF?page=1&searchpayment=$searchpayment\">Begin</a>&nbsp;"); 
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4&select=$searchpayment\">Previous</a>&nbsp;"); 

} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4&select=$searchpayment\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF1?page=$pagenext&sys=4&select=$searchpayment\">Next</a>&nbsp;"); 
//echo("&nbsp;<a href=\"$PHP_SELF?page=$numofpages&searchpayment=$searchpayment\">Last</a>&nbsp;"); 
}else{} 

//mysql_free_result($result);
		}
	?></td>
  </tr>
</table>
<? $i1=1;
	while ($row = @mysql_fetch_array($rs)) {
	$no1=($page-1)*$limit+$i1;
	$i1++;
	?>
<form name="<? echo  "form".$row['email'].$row['date']?>" method="post" action="paperlist_save.php">
	<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <th width="30%" bgcolor="#DEDBDE" scope="col"><div align="center"># <? echo $no1;?></div></th>
        <th width="70%" bgcolor="#DEDBDE" scope="col"><div align="center">Detail</div></th>       
      </tr>
	  <tr>
	  	<td>Register name</td>
		<td><? echo $row['email'];?> </td>
	  </tr>
	  <tr>
	  	<td colspan="2"><br />
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
				  <tr valign="top">
					<th bgcolor="#DEDBDE" scope="col" width="5%"><div align="center">#</div></th>
					<th bgcolor="#DEDBDE" scope="col" width="10%"><div align="center">Paper Code</div></th>
					<th bgcolor="#DEDBDE" scope="col" width="70%"><div align="center">Paper Title</div></th>
					<th bgcolor="#DEDBDE" scope="col" width="15%"><div align="center">Payment</div></th>
					</tr>
				  <?
				  		$sql = " SELECT id,project_name, description, payment FROM tiim_paper WHERE register_name = '".$row['email']."'";
						$result1 = @mysql_query($sql) or die(mysql_error());
						while ($row1 = @mysql_fetch_array($result1)) {			
						//echo $row['project_name']." ".$row['description']."<br>";		
						if($row1['payment']=="Not paid"){
							$bg="#FFFF99";
						} else {
							$bg="#FFFFFF";
						}	
						?>
						<tr valign="top">
							<td bgcolor="<? echo $bg;?>"><div align="center">&nbsp;</div></td>
							<td bgcolor="<? echo $bg;?>"><div align="center"><? if($row1['project_name']!=""){ echo $row1['project_name']; }else{ echo " ";}?></div></td>
							<td bgcolor="<? echo $bg;?>"><? if($row1['description']!=""){ echo $row1['description']; }else{ echo " ";}?></td>
						  <td bgcolor="<? echo $bg;?>"><div align="center"><? if($row1['payment']!=""){ echo $row1['payment']; }else{ echo " ";}?></div></td>
						</tr>	
						<?	
						}
						mysql_free_result($result1);
				  ?>
				  </table><br />		</td>
		</tr>
	  <!--
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
		-->
		<tr>
		<td>Payment</td>
		<?
			$sql = " SELECT DISTINCT payment FROM tiim_paper WHERE register_name = '".$row['email']."'";
			//echo $sql;
			$result2 = @mysql_query($sql) or die(mysql_error());
			while ($row2 = @mysql_fetch_array($result2)) {			
		?>
		  <td>&nbsp;
		<select name="payment">
			<option></option>
			<option value="Not paid" <? if($row2['payment']=="Not paid") echo "selected"?>>Not paid</option>
			<option value="Informed Payment" <? if($row2['payment']=="Informed Payment") echo "selected"?>>Informed Payment</option>
			<option value="Paid" <? if($row2['payment']=="Paid") echo "selected"?>>Paid</option>
		</select>		</td>
		<?
			}
		?>
		  </tr>
		   <? 
		  			$sql = " SELECT DISTINCT bank_owner,bank_slip FROM tiim_payment WHERE register_name = '".$row['email']."'";
			//echo $sql;
					$result3 = @mysql_query($sql) or die(mysql_error());
					while ($row3 = @mysql_fetch_array($result3)) {			
		  ?>
		<tr>				
		  <td>Bank Owner </td>		 
		  <td><? echo $row3['bank_owner']?></td>		 
		</tr>
		<tr>				
		  <td>Payment Slip </td>		 
		  <td><a href="../payment/uploads/<? echo $row['email']?>/payslip/<? echo $row3['bank_slip']?>" target="_blank">view</a></td>		 
		</tr>
		  <? }?>
		<tr>
	    <td>&nbsp;</td>
	    <td>
		<input type="submit" value="Save this row">
		<input type="hidden" name="pay" value="1">
		<!--<input type="hidden" name="id" value="<? echo $row1['id']; ?>">-->
		<input type="hidden" name="email" value="<? echo $row['email'];?>">		</td>
	    </tr>
	  </table>
	  </form>
		<br />	
		<?
		} // end while ($row2 = @mysql_fetch_array($result2)) {		?> 
		<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="right"><?
// ส่วนการแสดงผล
   	if($totalrows>$limit)
			{
				 $upper_limit = $page + 3;
$lower_limit = $page - 2;
 
if($page != 1){ 
$pageprev = $page - 1; 
//echo("<a href=\"$PHP_SELF?page=1&searchpayment=$searchpayment\">Begin</a>&nbsp;"); 
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4&select=$searchpayment\">Previous</a>&nbsp;"); 

} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4&select=$searchpayment\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF1?page=$pagenext&sys=4&select=$searchpayment\">Next</a>&nbsp;"); 
//echo("&nbsp;<a href=\"$PHP_SELF?page=$numofpages&searchpayment=$searchpayment\">Last</a>&nbsp;"); 
}else{} 

//mysql_free_result($result);
		}
	?></td>
          </tr>
        </table>		   
<? } // End function	

//while ($row = mysql_fetch_assoc($result)) {
	//show_paymentlist($row['email'],$row['status'],$row['first_name'],$row['last_name']);
	show_paymentlist($email2,$select,$page);
//}
?>
<? }
 if($sys==2.1){
 require_once "../connect_db.php";
 if($user==""){
$sql = " SELECT * FROM tiim_user";
}else{
$sql = " SELECT * FROM tiim_user WHERE email = '".$user."'";
}
//echo $sql;
$result = mysql_query($sql) or die(mysql_error());

 ?>
            <p>&nbsp;</p>
            <h1>Abstract List <a name="abstractlist" id="abstractlist"></a></h1> 
			<?	$num=0;  
			$sql1 = " SELECT * FROM tiim_paper  order by project_name asc";
	$result1= @mysql_query($sql1) or die(mysql_error());		
	?>		
			 <form action="paperlist_save.php" method="post" name="abstractform">       
 			    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                <tr>
				 <th width="4%" bgcolor="#DEDBDE" ><div align="center" ><font color="#DEDBDE">hide</font></div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="43%"><div align="center"><strong>Abstract</strong> Document</div></th>
                 
                  <th bgcolor="#DEDBDE" scope="col" width="26%"><div align="center">Status</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="27%"><div align="center">Action</div></th>
                </tr>
				<? 
				while ($row1 = @mysql_fetch_array($result1)){  // loop tiim_paper
				?>		
				<tr>
			<td  bgcolor="#EFEFEF">&nbsp;</td>	
			<td  bgcolor="#EFEFEF" colspan="3"><? echo $row1['project_name'];?></td>
			</tr> <?			
		$sql2 = " SELECT * FROM tiim_abstract_paper WHERE ref_id = '".$row1['id']."'";		
		$result2 = @mysql_query($sql2) or die(mysql_error());		
		while ($row2 = @mysql_fetch_array($result2)) {   // loop tiim_abstract_paper
		$num++; 
			 ?>
		<tr><td><label>
		<input type="checkbox" name="checkbox[<?=$num?>]" value="<?=$row2['id'];?>" />			   
		  </label></td>
		<td  > <?	 echo $row2['abstract'];		?>	</td>	
		<td><select name="status[<? echo $num;?>]"><option></option>
		<?	if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';	?>
		</select>		</td>
		<td><input type="submit" value="Save this row" name="abstractt[<?=$num;?>]">	
				<input type="hidden" name="ida[<? echo $num;?>]" value="<?=$row2['id'];?>">
				<input type="hidden" name="ref[<? echo $num;?>]" value="<?=$row2['ref_id'];?>">
				<input type="hidden" name="email[<? echo $num;?>]" value="<? echo $row1['register_name']; ?>">
				<input type="hidden" name="abstractname[<? echo $num;?>]" value="<? echo $row2['abstract']; ?>">
				<!--<input type="hidden" name="sta" value="<?=$status;?>"> -->
			</td>	
	</tr> 
	
<? 	   }  // end loop tiim_abstract_paper  ?>
<tr><td colspan="4"><font color="#FFFFFF">hide</font></td></tr>
<?	  } // end loop tiim_paper 	?>
	 
	<tr>
	<td width="5%"><label>
	  <div align="right"><IMG  height=22 src="../images/arrow_ltr.png" width=35>
	      </div>
	</label></td>
	  <td width="51%"  >&nbsp;&nbsp;<a href="javascript:checkall('abstractform','checkbox',true)">Check All</a> / <a href="javascript:checkall('abstractform','checkbox',false)">Uncheck All</a>	    </td>
	  <td ><select name="select1"><option></option>
        <?	if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';	?>
      </select>
	  </td>
	  <td ><input type="submit" value="Save this row"  name="abstractall">
	    <input type="hidden" name="numchk" value="<?=$num;?>">
			
		  </td>		
	</tr>
				</table>
			  </form>
			          
            <br />              
			   <hr width="400" align="center" />         
           <? }
 if($sys==2.2){
 require_once "../connect_db.php";
 if($user==""){
$sql = " SELECT * FROM tiim_user";
}else{
$sql = " SELECT * FROM tiim_user WHERE email = '".$user."'";
}
//echo $sql;
$result = mysql_query($sql) or die(mysql_error());

 ?>
             <p>&nbsp;</p>
            <h1>Full Paper List <a name="fullpaperlist" id="fullpaperlist"></a></h1>
            <?	$num=0;  
			$sql1 = " SELECT * FROM tiim_paper order by project_name asc ";
	$result1= @mysql_query($sql1) or die(mysql_error());		
	?>
	           <form action="paperlist_save.php" method="post" name="fullpaperlist" id="fullpaperlist">
              <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                <tr>
                  <th width="4%" bgcolor="#DEDBDE" ><div align="center" ><font color="#DEDBDE">hide</font></div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="43%"><div align="center"><strong>Full Paper </strong> Document</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="26%"><div align="center">Status</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="27%"><div align="center">Action</div></th>
                </tr>
                <? 
				while ($row1 = @mysql_fetch_array($result1)){  // loop tiim_paper
				?>
                <tr>
                  <td  bgcolor="#EFEFEF">&nbsp;</td>
                  <td  bgcolor="#EFEFEF" colspan="3"><? echo $row1['project_name'];?></td>
                </tr>
                <?			
		$sql2 = " SELECT * FROM tiim_full_paper WHERE ref_id = ' ".$row1['id']." '    ";		
		$result2 = @mysql_query($sql2) or die(mysql_error());		
		while ($row2 = @mysql_fetch_array($result2)) {   // loop tiim_abstract_paper
		$num++; 
			 ?>
                <tr>
                  <td><label>
                    <input type="checkbox" name="checkbox[<?=$num?>]2" value="<?=$row2['id'];?>" />
                  </label></td>
                  <td  ><? echo $row2['full_paper'];		?></td>
                  <td><select name="status2[<? echo $num; ?>]">
                    <option></option>
                    <?	if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';	?>
                  </select></td>
                  <td><input type="submit" value="Save this row" name="fullpaper[<?=$num;?>]" />
                      <input type="hidden" name="ida2[<? echo $num;?>]" value="<?=$row2['id'];?>" />
                      <input type="hidden" name="ref2[<? echo $num;?>]" value="<?=$row2['ref_id'];?>" />
					  <input type="hidden" name="email[<? echo $num;?>]" value="<? echo $row1['register_name']; ?>" />
					  <input type="hidden" name="fullname[<? echo $num;?>]" value="<? echo $row2['full_paper']; ?>"/>
                      <!--<input type="hidden" name="sta" value="<?=$status;?>"> -->                  </td>
                </tr>
                <? 	   }  // end loop tiim_abstract_paper  ?>
                <tr>
                  <td colspan="4"><font color="#FFFFFF">hide</font></td>
                </tr>
                <?	  } // end loop tiim_paper 	?>
                <tr>
                  <td width="5%"><label>
                      <div align="right"><img  height="22" src="../images/arrow_ltr.png" width="35" /> </div>
                    </label></td>
                  <td width="51%"  >&nbsp;&nbsp;<a href="javascript:checkall('fullpaperlist','checkbox',true)">Check All</a> / <a href="javascript:checkall('fullpaperlist','checkbox',false)">Uncheck All</a> </td>
                  <td ><select name="select2">
                    <option></option>
                      <?	if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';	?>
                    </select>                  </td>
                  <td ><input type="submit" value="Save this row"  name="fullpaperall" />
                      <input type="hidden" name="numchk2" value="<?=$num;?>" />                  </td>
                </tr>
              </table>
            </form>
            <br />
            <hr width="400" align="center" />
            <p><br />
                <!-- End Full -->
                <?
		}?>
         </td>
      </tr>
    </table></td>
    <td width="10" align="left" valign="top" background="../images/shadow_right_bg.png"><img src="../images/shadow_right.png" /></td>
  </tr>
</table>
</div>

<map name="Map" id="Map"><area shape="rect" coords="10,8,57,27" href="index.html" />
</map></body>
</html>
