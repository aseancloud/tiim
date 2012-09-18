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
                <li class="admin_li"><a href="main.php?sys=2">Paper Detail</a>
                  <li class="admin_li"><a href="main.php?sys=2.1">Abstract List</a></li>
                        <li class="admin_li"><a href="main.php?sys=2.2">Full Paper List</a></li>
					
				<li class="admin_li"><a href="main.php?sys=4">Payment List</a></li>
				
						  <li class="admin_li"><a href="main.php?sys=4.1">PayPal Method</a></li>
						  <li class="admin_li"><a href="main.php?sys=4.2">Bank Transfer Method</a></li>
					
                <li class="admin_li"><a href="main.php?sys=3">Mail System</a></li>				
                <li class="admin_li"><a href="../payment/payment_admin.php" target="_blank">Payment System </a></li>
          </ul>
            </div>
            <?  if($sys==1 || $sys==""){?>		
            <p>&nbsp;</p>
            <h1>User List<a name="userlist" id="userlist"></a></h1>
		
<?
require_once "../connect_db.php";
if($user==""){
$sql = " SELECT * FROM tiim_user";
}else{
//$sql = " SELECT * FROM tiim_user WHERE email = '".$user."'";
}
//echo $sql;
$counter= mysql_query($sql) or die(mysql_error());

?>


            <p>Total User List : <? echo @mysql_num_rows($counter);?><br />
            </p>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
			<td width="493"><Form method="post" action="main.php?sys=1"> 
Search for : <Select name="field_search" size="1"> 
<Option value="first_name "<? if($field_search=="first_name "){echo "selected";}; ?>>Name</option> 
<Option value="last_name"<? if($field_search=="last_name"){echo "selected";}; ?>>Lastname</option>
<Option value="institution"<? if($field_search=="institution"){echo "selected";}; ?>> Institution</option>
<!--<Option value="country"<?if($field_search=="country"){echo "selected";}; ?>>Country</option> -->
<Option value="email"<? if($field_search=="email"){echo "selected";}; ?>>Email</option> 
</Select> 
<Input type="text" name="search"  value="<? echo $search?>" size="25"> 
<Input type="submit" value="Search"> 
</Form> </td>

                <td width="381">
				<form action="main.php?sys=1" method="post" name="pay" id="pay">
                Payment status:  <select name="select3" onchange="this.form.submit();">
                    <option value="" selected="selected">All Payment</option>
                    <option value="Not paid"<? if($select3=="Not paid"){echo "selected";}; ?>>Not paid</option>
					<option value="Informed Payment"<? if($select3=="Informed Payment"){echo "selected";}; ?>>Informed Payment</option>
                    <option value="Paid"<? if($select3=="Paid"){echo "selected";}; ?>>Paid</option>
                  </select>
                </form></td>
              </tr>
			 
			  <?
require_once "../connect_db.php";
 if($Submit<>"" || $field_search<>"" ){      
$query = " SELECT * FROM tiim_user where $field_search like '%$search%'";
//$sql = "select  first_name ,last_name ,title,institution,country,pay,email from $tblname where $field_search like '%$search%'";
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
$no=1;  
?>
            </table>        
           
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="right">
					<?
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
    <th width="4%" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
	<th width="12%" bgcolor="#DEDBDE" scope="col"><div align="center">First Name</div></th>
    <th width="12%" bgcolor="#DEDBDE" scope="col"><div align="center">Last Name</div></th>
    <th width="6%" bgcolor="#DEDBDE" scope="col"><div align="center">Title</div></th>
    <th width="25%" bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>
<!-- <th bgcolor="#DEDBDE" scope="col"><div align="center">Address</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">City</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">Postal Code</div></th> -->
<!--    <th bgcolor="#DEDBDE" scope="col"><div align="center">State Province</div></th> -->
    <th width="8%" bgcolor="#DEDBDE" scope="col"><div align="center">Country</div></th>
<th width="17%" bgcolor="#DEDBDE" scope="col"><div align="center">Payment</div></th> 
 <!--   <th bgcolor="#DEDBDE" scope="col"><div align="center">Fax</div></th> -->
    <th width="8%" bgcolor="#DEDBDE" scope="col"><div align="center">Email</div></th>
	<th width="8%" bgcolor="#DEDBDE" scope="col"><div align="center">View</div></th>	
  </tr>
<?
require_once "../connect_db.php";

while ($row = mysql_fetch_assoc($rs)) {
	$no1=($page-1)*$limit+$no;
	//$sql=mysql_query("SELECT * FROM tiim_user  ORDER BY  user_id");
  if ($flag==-1) echo '<tr valign="top" bgcolor="#EFEFEF">'; 
	else echo '<tr valign="top" >';                         
	echo '<td nowrap="nowrap">'.$row['user_id'].'</td>';
    echo '<td nowrap="nowrap"><a href="main.php?sys=2&user='.$row['email'].'">'.$row['status'].' '.$row['first_name'].'</a></td>';
    echo '<td><a href="main.php?sys=2&user='.$row['email'].'">'.$row['last_name'].'</a></td>';
	echo '<td>'.$row['title'].'</td>';
	echo '<td>'.$row['institution'].'</td>';
	//echo '<td>'.$row['address'].'</td>';
	//echo '<td>'.$row['city'].'</td>';	
	//echo '<td>'.$row['postal_code'].'</td>';	
	//echo '<td>'.$row['state_province'].'</td>';	
	echo '<td>'.$row['country'].'</td>';	
	//-----------  test pay หน้า user list  12/02/53
	//$sql = "SELECT tiim_paper.payment, tiim_user.pay FROM `tiim_paper` , `tiim_user` WHERE payment== pay";
	//$sql =" SELECT payment FROM tiim_paper WHERE payment=='$pay1' ";
	//------------------ จบ การทดสอบ 
	echo '<td>'.$row['pay'].'</td>';	
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
            <h1>Paper Detail<a name="paperlist" id="paperlist"></a></h1>
            <Form method="post" action="main.php?sys=2"> <p>&nbsp; &nbsp; &nbsp;&nbsp;  Search for :
              <select name="field_search1" size="1">
			    
                <option value="register_name "<? if($field_search1=="register_name"){echo "selected";}; ?>>Email</option>
                <option value="project_name"<? if($field_search1=="project_name"){echo "selected";}; ?>>Paper Code</option>
                <option value="institution"<? if($field_search1=="institution"){echo "selected";}; ?>> Institution</option>
              
              </select>
              <input type="text" name="search1"  value="<? echo $search1?>" size="25" />
              <input type="submit" value="Search" />
			  </p></Form>
</p>

  <?
  
?>

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
//---------------------

//-------------------------
	while ($row = @mysql_fetch_array($result)) {
	?>
	
	<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
	<tr>
        <th width="30%" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
        <th width="70%" bgcolor="#DEDBDE" scope="col"><div align="center">Detail</div></th>       
      </tr>
	  <tr>
	  	<td>Username</td>
		<td><? echo $title ,"  ",$first_name, " &nbsp; ",$last_name," </br>Email : ",$username ?></td>
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
		</table><br/>
		
		</form>
		<br />
		<hr width="400" align="center" />
		<br />

		<!-- End Full -->  
		<?
	
		}
	  
} // End function	

//$sql = "select  first_name ,last_name ,title,institution,country,pay,email from $tblname where $field_search like '%$search%'";

 // mare 15/12/2009
 if($Submit<>"" || $field_search1<>"" ){      
	 //echo "mare ...".$search1;
	 require_once "../connect_db.php";

 $query = " SELECT  tiim_user.email, tiim_user.status, tiim_user.first_name,  tiim_user .last_name FROM tiim_paper ,tiim_user WHERE tiim_paper.$field_search1 like '%$search1%' AND tiim_user.email = tiim_paper.register_name";
	
	$result = @mysql_query($query) or die(mysql_error());
		
		/*if(@mysql_num_rows($result)==0){
			echo "No Data.";	
		}*/
	while ($row = mysql_fetch_assoc($result)) {
	
		show_paperlist($row['email'],$row['status'],$row['first_name'],$row['last_name']);
	
	}
	//----------------end mare 15-12-2009
}
while ($row = mysql_fetch_assoc($result)) {
	show_paperlist($row['email'],$row['status'],$row['first_name'],$row['last_name']);
}

?>
<center><input name="btnExport" type="button" value="Export" onClick="JavaScript:window.location='excel.php';"></center>
<?  } 
?>  

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

<? if($sys==4 ) {  ?> 
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

<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="493"><form  method="post"  action="main.php?sys=4" >
	Search for :
          <select name="field_search2" size="1">
			<Option value="first_name "<? if($field_search2=="first_name "){echo "selected";}; ?>>Name</option> 
            <Option value="last_name"<? if($field_search2=="last_name"){echo "selected";}; ?>>Lastname</option>
            <Option value="email"<? if($field_search2=="email"){echo "selected";}; ?>>Email</option> 
          </select>
          <input type="text" name="search2"  value="<? echo $search2?>" size="25" />
          <input type="submit" value="Search" />
    
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
  //if($Submit<>"" || $field_search2<>"" ){ 
  
function show_paymentlist($field_search2,$search2,$searchpayment,$page){

if($Submit<>"" || $field_search2<>"" ){   
//$query = " SELECT * FROM tiim_user  where email ='$email' ";
$query = " SELECT * FROM tiim_user WHERE $field_search2 like '%$search2%' ";
//echo $query;	
}
 else if($searchpayment<>""){      
// echo "mare ...".$search2;
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
		<td><? echo $row['title']."&nbsp;".$row['first_name']."&nbsp;&nbsp;".$row['last_name']."<br/>Email :&nbsp;".$row['email'];?></td>
		<? // echo $title ,"  ",$first_name, " &nbsp; ",$last_name," </br>Email : ",$username ?>
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
				  //$b1= " SELECT user_update, date_update FROM tiim_update_paper ";
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
							<td bgcolor="<? echo $bg;?>"><div align="center">
							<? $id_update=$row1['id']; ?>
							  <? if($row1['project_name']!=""){ echo $row1['project_name']; }else{ echo " ";}?>
							</div></td>
							<td bgcolor="<? echo $bg;?>"><? if($row1['description']!=""){ echo $row1['description']; }else{ echo " ";}?></td>
						  <td bgcolor="<? echo $bg;?>"><div align="center"><? if($row1['payment']!=""){ echo $row1['payment']; }else{ echo " ";}?></div></td>
						</tr>
							
						<?	
						}
						mysql_free_result($result1);
				  ?>
				  </table>
		<br />		</td>
		</tr>
	  <!--
	  <tr>
	  	<td>Paper Code</td>
		<td><?echo $row['project_name'];?></td>
	  </tr>
	  <tr>
	  	<td>Paper Title</td>
		<td><?echo $row['description'];?></td>
	  </tr>
	  <tr>
	    <td>Institution</td>
	    <td><?echo $row['institution'];?></td>
	    </tr>
	  <tr>
	    <td>Date</td>
	    <td><?echo $row['date'];?></td>
	    </tr>
		
	  <tr>
	    <td>Payment</td>
	    <td>
		<select name="payment">
		<option></option>
		<option value="Not paid" <?if($row['payment']=="Not paid") echo "selected"?>>Not paid</option>
		<option value="Paid" <?if($row['payment']=="Paid") echo "selected"?>>Paid</option>
		</select>			</td>
	    </tr>
		-->
		<tr>
		<td>Payment </td>
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
		  			$sql = " SELECT DISTINCT bank_owner,bank_slip FROM tiim_payment WHERE method =1 and register_name = '".$row['email']."'";
			//echo $sql;
					$result3 = @mysql_query($sql) or die(mysql_error());
					while ($row3 = @mysql_fetch_array($result3)) {			
		  ?>
		<tr>				
		  <td>Bank Owner </td>		 
		  <td><? echo $row3['bank_owner']?></td>		 
		</tr>
		<tr>				
		  <td>Payment Slip   </td>		 
		  <td><a href="../payment/uploads/<? echo $row['email']?>/payslip/<? echo $row3['bank_slip']?>" target="_blank">view</a>
		  </td>	
		  </tr>
		
		  <? }?>
		  	  <? 
 	  $sql4=" SELECT DISTINCT register_name  from tiim_paper where  register_name= '".$row['email']."'  ";
			//	echo $sql4;
			$result4 = @mysql_query($sql4) or die(mysql_error());
			$numrow4=@mysql_num_rows($result4);				
			$row4=mysql_fetch_array($result4);	
			$a=$row4['register_name'];		
		//	echo $a;		
			  $sql5="SELECT  tiim_payment.method,tiim_paper.register_name from tiim_paper,tiim_payment where   tiim_payment.method=2 and tiim_paper.register_name='".$row4['register_name']."' group by tiim_paper.register_name  ";	
			// echo $sql5;	
			$result5 = @mysql_query($sql5) or die(mysql_error());				
			$numrow5=@mysql_num_rows($result5);	
								
			while($row5 = @mysql_fetch_array($result5)){
				
			 			?> 
		<!--   <tr>	 
		  <td>PayPal Method</td>	
		  <td align="left">
		
		 <input type="checkbox" name="checkbox[<?=$j;?>];" value="<?echo $checkbox; ?>" />   
		</td>				
		</tr> --> 
	 <? 
	}
		  ?>
		  <?php
		  // $sql = " SELECT id,project_name, description, payment FROM tiim_paper WHERE register_name = '".$row['email']."'";
		  //---------------08/03/53
		  // WHERE ref_id = '".$row1['id']."'";
		    require_once "../connect_db.php";	
			
	$b1= " SELECT user_update, date_update,action_update FROM tiim_update_paper WHERE ref_id = '".$id_update."'"; 
	
		
				$a1 = @mysql_query($b1) or die(mysql_error());
				
			//$sqlCount1= " SELECT COUNT(id) FROM tiim_update_paper ";
			//$resultCount1 = @mysql_query($sqlCount1) or die(mysql_error());
			//$count1 = @mysql_fetch_array($resultCount1); 
		  //----------------- จบ 08/03/53
		  ?>
                    	<tr>
						<td>who_update </td>
                        	<td>
								<?php
				while ($c1 = @mysql_fetch_array($a1)) {
				
					?>
							<?php //echo $c1['user_update']."<br />".$c1['date_update'];?>
						
							<?php 
					
							echo $c1['user_update']."(".$c1['date_update'].")"."(".$c1['action_update'].")"."<br/>";
							
							?>
							  <?php
						//echo $c['user_update']." ".$c['date_update']; 
				 		
				}
				//if(!$count1[0]){
				//	echo "<tr><td> - </td></tr>";
				//}
				
				?>
							</td>
                        </tr>
                    
                  
		<tr>
	    <td>&nbsp;</td>
	    <td>
		<input type="submit" value="Save this row">
		<input type="hidden" name="pay" value="1">
		<!--<input type="hidden" name="id" value="<?echo $row1['id']; ?>">-->
		<input type="hidden" name="email" value="<? echo $row['email'];?>">	
	<input type="hidden" name="id_update" value="<? echo $id_update;?>">
		<!--<input type="input" name="email" value="<?echo $row['email'];?>">	
	<input type="input" name="id_update" value="<?echo $id_update; ?>"> -->
			</td>
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
	show_paymentlist($field_search2,$search2,$select,$page);
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
	        $sql1 = " SELECT * FROM tiim_paper,tiim_user WHERE tiim_paper.register_name=tiim_user.email order by project_name  asc";
			
			//$sql1 = " SELECT * FROM tiim_paper,tiim_user WHERE tiim_paper.register_name=tiim_user.email AND tiim_paper.institution=tiim_user.institution order by project_name asc";
			//------------------------- ทำ show  name,last_name Absarck list 17/12/52
		//	$sql_show_name = " SELECT * FROM tiim_user WHRER  tiim_paper.register_name=tiim_user.email ";
	     //   $sql_show_name1= @mysql_query($sql_show_name) or die(mysql_error());	
		  //-----------------------------
			   $result1= @mysql_query($sql1) or die(mysql_error());		
	?>		
			 <form action="paperlist_save.php" method="post" name="abstractform">       
 			    <table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                <tr>
				 <th width="4%" bgcolor="#DEDBDE" ><div align="center" ><font color="#DEDBDE">hide</font></div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="43%"><div align="center"><strong>Abstract</strong> Document</div></th>
                     <th bgcolor="#DEDBDE" scope="col" width="26%"><div align="center">Name</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="26%"><div align="center">Status</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="27%"><div align="center">Action</div></th>
                </tr>
				<? 
				while ($row1 = @mysql_fetch_array($result1)){  // loop tiim_paper
				//---------- show name,last_name 17/12/52
				//$sql_show = @mysql_fetch_array($sql_show_name1);
				//------------
				?>		
				<tr>
			<td  bgcolor="#EFEFEF">&nbsp;</td>	
			<td  bgcolor="#EFEFEF" colspan="1"><? echo $row1['project_name'];?></td>
			<td  bgcolor="#EFEFEF" colspan="1"><? echo $row1['title']."&nbsp;".$row1['first_name']."&nbsp;&nbsp;".$row1['last_name']."<br/>Email :&nbsp;".$row1['register_name'];?></td>
			<? //echo $row['first_name']."&nbsp;&nbsp;".$row['last_name']."<br/>Email :&nbsp;".$row['email'];?>
			<td  bgcolor="#EFEFEF" colspan="1">&nbsp;</td>
			<td  bgcolor="#EFEFEF" colspan="1">&nbsp;</td>
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
		<td>&nbsp; </td>
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
<tr><td colspan="5"><font color="#FFFFFF">hide</font></td></tr>
<?	  } // end loop tiim_paper 	?>
	 
	<tr>
	<td width="5%"><label>
	  <div align="right"><IMG  height=22 src="../images/arrow_ltr.png" width=35>
	      </div>
	</label></td>
	  <td width="51%"  >&nbsp;&nbsp;<a href="javascript:checkall('abstractform','checkbox',true)">Check All</a> / <a href="javascript:checkall('abstractform','checkbox',false)">Uncheck All</a>	    </td>
	  <td>&nbsp;</td>
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
				  <th bgcolor="#DEDBDE" scope="col" width="26%"><div align="center">who_update</div></th>
                  <th bgcolor="#DEDBDE" scope="col" width="27%"><div align="center">Action</div></th>
                </tr>
                <? 
				while ($row1 = @mysql_fetch_array($result1)){  // loop tiim_paper
				?>
                <tr>
                  <td  bgcolor="#EFEFEF">&nbsp;</td>
                  <td  bgcolor="#EFEFEF" colspan="4"><? echo $row1['project_name'];?></td>
                </tr>
                <?		
				$sql_update= " SELECT * FROM tiim_full_paper WHERE ref_id = ' ".$row1['id']." '    ";		
		$sql2 = " SELECT * FROM tiim_full_paper WHERE ref_id = ' ".$row1['id']." '    ";	
		$result2 = @mysql_query($sql2) or die(mysql_error());		
		while ($row2 = @mysql_fetch_array($result2)) {   // loop tiim_abstract_paper
		$num++; 
			 ?>
			 
                <tr>
                  <td><label>
                    <input type="checkbox" name="checkbox[<?=$num?>]2" value="<?=$row2['id'];?>" />
                  </label></td>
                  <td  ><? echo $row2['full_paper'];?></td>
                  <td><select name="status2[<? echo $num; ?>]">
                    <option></option>
                    <?	if ($row2['status']=='Received') echo '<option selected="selected">Received</option>';
			else echo '<option>Received</option>';
			if ($row2['status']=='Accepted with revision') echo '<option selected="selected">Accepted with revision</option>';
			else echo '<option>Accepted with revision</option>';
			if ($row2['status']=='Accepted') echo '<option selected="selected">Accepted</option>';
			else echo '<option>Accepted</option>';
			if ($row2['status']=='Rejected') echo '<option selected="selected">Rejected</option>';
			else echo '<option>Rejected</option>';	
			?>
                  </select> 
				
				  </td>
				  
				  <!--- ข้อมูล update โดยใคร 211252 -->
				   <td  >
                   
                   
                   
                   
                   
                   
				   <?
				      //--------------update โดยใคร
				   require_once "../connect_db.php";
				 //------------ส่วนของชื่อ
            $sql_update= " SELECT first_name FROM tiim_admin WHERE email  ='$username'";
		    $result_update = @mysql_query($sql_update) or die(mysql_error());
			$row_update=mysql_fetch_array($result_update);	
			$user_update=$row_update['first_name'];
			//$date_update =date ("Y-m-d H:i:s"); 
			//---------------------ส่วนของ ref_id รหัส paper
		    $sql_update1= " SELECT * FROM tiim_update_paper,tiim_full_paper WHERE tiim_update_paper.ref_id=tiim_full_paper.ref_id";
		    $result_update1= @mysql_query($sql_update1) or die(mysql_error());
			$row_update1=mysql_fetch_array($result_update1);	
			//$ref_2= $row_update1['tiim_full_paper.ref_id'];
			//---------------------------
			$sql_update2= " SELECT ref_id,date_update FROM tiim_update_paper ";
		    $result_update2= @mysql_query($sql_update2) or die(mysql_error());
			$row_update2=mysql_fetch_array($result_update2);	
			//$user_update=$row_update['first_name'];
			//-----------------tolal รวมทั้งสองใส่ tabel ใหม่
			 /*  $sql_update2= " SELECT * FROM tiim_update_paper,tiim_full_paper WHERE tiim_update_paper.ref_id=tiim_full_paper.ref_id";
				   $result_update2= @mysql_query($sql_update2) or die(mysql_error());
			$row_update2=mysql_fetch_array($result_update2);	*/
			//------------------------
				  //if($row_update['action_update']==" "){
					  
				
				$b= " SELECT user_update, date_update,action_update  FROM tiim_update_paper WHERE ref_id = ".$row2['id']." ORDER BY date_update DESC";
				$a = @mysql_query($b) or die(mysql_error());
				
				$sqlCount= " SELECT COUNT(id) FROM tiim_update_paper WHERE ref_id = ".$row2['id'];
				$resultCount = @mysql_query($sqlCount) or die(mysql_error());
				$count = @mysql_fetch_array($resultCount);
				
				
				?>
                
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-size:11px;">
				<?php
				while ($c = @mysql_fetch_array($a)) {
					/*if($row_update2==" "){
						echo "<center> - </center>";
				 	}
				 	else {  */
				 	//echo $user_update,$date_update.$c['user_update']; 
				
					?>
                   
                    	<tr>
                        	<td><?php echo $c['user_update'].$c['action_update']."<br />".$c['date_update'];?></td>
                        </tr>
                    
                    <?php
						//echo $c['user_update']." ".$c['date_update']; 
				 	
				}
				if(!$count[0]){
					echo "<tr><td align='center'> - </td></tr>";
				}
				
				?>
                </table>
                <?php
					  
				
				 
				//if ($full_paper==1) {

				// echo $sql_update1['user_update']; 
				//}
				 //--------------
				  ?>
				   
				   </td>
				   <!---  จบ ---->
                  <td><input type="submit" value="Save this row" name="fullpaper[<?=$num;?>]" />
                      <input type="hidden" name="ida2[<? echo $num;?>]" value="<?=$row2['id'];?>" />
                      <input type="hidden" name="ref2[<? echo $num;?>]" value="<?=$row2['ref_id'];?>" />
					  <input type="hidden" name="email[<? echo $num;?>]" value="<? echo $row1['register_name']; ?>" />
					  <input type="hidden" name="fullname[<? echo $num;?>]" value="<? echo $row2['full_paper']; ?>"/>
                      <!--<input type="hidden" name="sta" value="<?=$status;?>"> -->    
					  
					       <!--<input type="input" name="status_id" value="<? echo $row2['status']; ?>"  />  -->      
						    
					<!--   <input type="input" name="num_id" value="<? echo $num; ?>"  />-->
						 <input type="hidden" name="num_id" value="<? echo $num; ?>"  />  
					   </td>
                </tr>
                <? 	   }  // end loop tiim_abstract_paper  ?>
                <tr>
                  <td colspan="5"><font color="#FFFFFF">hide</font></td>
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
					 <td  >&nbsp;</td>
                  <td ><input type="submit" value="Save this row"  name="fullpaperall" />
                      <input type="hidden" name="numchk2" value="<?=$num;?>" />                  </td>
                </tr>
              </table>
			  
            </form>
            <br />
            <hr width="400" align="center" />
            <p><br />
                <!-- End Full -->
                <?	}  if($sys==4.1){?>		
            <p>&nbsp;</p>
            <h1>PayPal Method<a name="PayPal Method" id="PayPal Method"></a></h1><br />
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
			<td width="493"> <form name="search"  action="main.php?sys=4.1" method="post" >Email : 
			<input name="email" type="text"  value="<? echo $email; ?>"/>
			    <label>
			    <input type="submit" name="Submit" value="Search" />
				
			    </label>
			  
			</form></td>
                <td width="381">&nbsp;</td>
              </tr><?

require_once "../connect_db.php";
 if($Submit<>"" || $email<>"" ){      
$query = " SELECT * FROM tiim_payment,tiim_user where tiim_payment.register_name=tiim_user.email and tiim_payment.method=2   and tiim_payment.register_name='$email' ";
}
else  {
$query = " SELECT * FROM tiim_payment,tiim_user where tiim_payment.register_name=tiim_user.email and tiim_payment.method=2  group by tiim_payment.register_name ";
//$query = " SELECT * FROM tiim_paper,tiim_user  where tiim_user.pay ='Paid'  and tiim_paper.payment='Paid'  ";
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
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4.1\">Previous</a>&nbsp;"); 

} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4.1\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&sys=4.1\">Next</a>&nbsp;"); 
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
	<th bgcolor="#DEDBDE" scope="col"><div align="center">Edit</div></th>	
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
	 echo '<a href="main.php?sys=4&email2='.$row['email'].'"><img src="../images/edit.png" width="16" 
	 height="16" border="0" ></a>';
		
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
              <p>
                <?
// ส่วนการแสดงผล
   	if($totalrows>$limit)
			{
				 $upper_limit = $page + 3;
$lower_limit = $page - 2;
 
if($page != 1){ 
$pageprev = $page - 1; 
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4.1\">Previous</a>&nbsp;"); 
} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4.1\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&sys=4.1\">Next</a>&nbsp;"); 
}else{} 

mysql_free_result($result);
		}
	?> 
                <?	} ?>
              </p><?  if($sys==4.2){?>		
            <p>&nbsp;</p>
            <h1>Bank Transfer Method<a name="Bank Transfer Method" id="Bank Transfer Method"></a></h1><br />
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
			<td width="493"> <form name="search"  action="main.php?sys=4.2" method="post" >Email : 
			<input name="email" type="text"  value="<? echo $email; ?>"/>
			    <label>
			    <input type="submit" name="Submit" value="Search" />
				
			    </label>
			  
			</form></td>
                <td width="381">&nbsp;</td>
              </tr><?

require_once "../connect_db.php";
 if($Submit<>"" || $email<>"" ){      
$query = " SELECT * FROM tiim_payment,tiim_user where tiim_payment.register_name=tiim_user.email and tiim_payment.method=1   and tiim_payment.register_name='$email' ";
}
else  {
$query = " SELECT * FROM tiim_payment,tiim_user where tiim_payment.register_name=tiim_user.email and tiim_payment.method=1  group by tiim_payment.register_name ";
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
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4.2\">Previous</a>&nbsp;"); 

} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4.2\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&sys=4.2\">Next</a>&nbsp;"); 
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
	<th bgcolor="#DEDBDE" scope="col"><div align="center">Edit</div></th>	
  </tr>
<?
//----------------------------------
$no2 =  date("md");
//echo $txt1 . " " . $txt2 ;


//------------------------------------
while ($row = mysql_fetch_assoc($rs)) {
	$no1=($page-1)*$limit+$no;	
    if ($flag==-1) echo '<tr valign="top" bgcolor="#EFEFEF">'; 
	else echo '<tr valign="top" >';                         
	echo '<td nowrap="nowrap">'.$no1.'</td>';
    echo '<td nowrap="nowrap"><a href="main.php?sys=2&user='.$row['email'].'">'.$row['status'].'  '.$row['first_name'].'</a></td>';
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
		 echo '<a href="main.php?sys=4&email2='.$row['email'].'"><img src="../images/edit.png" width="16" 
	 height="16" border="0" ></a>';
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
echo("<a href=\"$PHP_SELF?page=$pageprev&sys=4.2\">Previous</a>&nbsp;"); 
} 

$lower_dots = $page - $lowerlimit;

if($lower_dots > 3){
echo("...");}

for($i = 1; $i <= $numofpages; $i++){ 
if($numofpages>1){

if($i == $page){
echo("&nbsp;<b>[".$i."]</b>&nbsp;");} 

if(($i != $page)&&($i < $upper_limit)&&($i >= $lower_limit)){
echo("&nbsp;<a href=\"$PHP_SELF?page=$i&sys=4.2\">$i</a>&nbsp;");}
}}

$upper_dots = $numofpages - 2;

if($page < $upper_dots){
echo("...&nbsp;");}

if(($totalrows - ($limit * $page)) > 0){ 
$pagenext = $page + 1; 
echo("&nbsp;<a href=\"$PHP_SELF?page=$pagenext&sys=4.2\">Next</a>&nbsp;"); 
}else{} 

mysql_free_result($result);
		}
	?>
              <? } ?>
            <p></p></td>
      </tr>
    </table></td>
    <td width="10" align="left" valign="top" background="../images/shadow_right_bg.png"><img src="../images/shadow_right.png" /></td>
  </tr>
</table>
</div>

<map name="Map" id="Map"><area shape="rect" coords="10,8,57,27" href="index.html" />
</map></body>
</html>
