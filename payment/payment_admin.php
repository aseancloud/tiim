<?
session_start();
//require_once "validate_user.php";
require_once "../web_function.php";
require_once "../connect_db.php";
//echo $my_username."ssssss";

function greaterDate($start_date,$end_date){  
						$start = strtotime($start_date);  
						$end = strtotime($end_date);  
						if ($start-$end > 0)    
							return 1;  
						else   
							return 0;
					}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_TIIM.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>TIIM Conferecne 2010</title>
<script language='javascript' src='popcalendar.js'></script>
<script language="javascript">
function checkk(form) {

	if(form.bank_date.value == "") {
		alert("Transfer Date Required.");
		form.bank_date.focus();
		return false;
	}	
	
	else if(form.bank_amount.value=="") {
		alert("Transfer Amount Required.") ;
		form.bank_amount.focus() ;
		return false ;
	}
	else if(form.bank_slip.value=="") {
		alert("Bank Slip Required.") ;
		form.bank_slip.focus() ;
		return false ;
	}	
	else if(form.bank_slip.value.lastIndexOf(".jpg")==-1 && form.bank_slip.value.lastIndexOf(".gif")==-1 && form.bank_slip.value.lastIndexOf(".pdf")==-1) {
   		alert("File type *.jpg , *.gif and *.pdf only.");
   		return false;	
	}
	else if(form.bank_owner.value=="") {
		alert("Select From Bank.") ;
		form.bank_owner.focus() ;
		return false ;
	}
	else if(form.bank_transfer.selectedIndex==0) {
		alert("Select Transfer To.") ;
		return false ;
	}


else 
return true ;
}
</script>
<script language="javascript">
<!--
function checkvisa(form) {
	if(form.chk_agree.checked!=1) {
		alert("Agreement with Terms & Conditionsv is Required.");
		return false;
	}		
else 
return true ;
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



<!-- InstanceEndEditable -->
<link href="../stylesheets.css" rel="stylesheet" type="text/css" />
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

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('../images/btn_search_h.png')">
<div id="container">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0" class="h">
  <tr>
    <td width="10" align="left" valign="top" background="../images/shadow_left_bg.png"><img src="../images/shadow_left.png" /></td>
    <td width="746" align="left" valign="top" class="h"><table width="746" height="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="topbar"><span class="top_link"><a class="links" href="http://www.tiimconference.org">www.tiimconference.org</a></span><span class="top_menu"><a class="links" href="../index.html"><img src="../images/spacer.gif" width="380" height="1" />Home</a> | <a class="links" href="../contact.html">Contact</a><!-- | <a class="links" href="http://www.tiimconference.org/tiim2009">TIIM 2009</a>--></span></td>
      </tr>
      <tr>
        <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','746','height','191','src','swf/headWeb','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','swf/headWeb' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="746" height="191">
          <param name="movie" value="../swf/headWeb.swf" />
          <param name="quality" value="high" />
          <embed src="../swf/headWeb.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="746" height="191"></embed>
        </object></noscript></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="186" align="left" valign="top" bgcolor="#dbdbdb">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="top_mainmenu"><img src="../images/top_menu_bar.png" width="186" height="34" border="0" usemap="#Map" /></td>
                  </tr>
                  <tr>
                    <td><ul id="main_menu">
                      <li class="li_title">General Info
                        <ul>
                          <li class="li_sub"><a href="../conf_theme.html">Conference Theme</a></li>
                          <li class="li_sub"><a href="../conf_aims.html">Conference Aims</a></li>
                          <li class="li_sub"><a href="../subject_area.html">Subject Areas</a></li>
                          <li class="li_sub"><a href="../committees.html">Committees</a></li>
                          <li class="li_sub"><a href="../important_dates.html">Important Dates</a></li>
                          <li class="li_sub"><a href="../conference_fee.html">Conference Fees</a></li>
                        </ul>
                      </li>
                      <li class="li_title">Program
                        <ul>
                          <!--
						  <li class="li_sub"><a href="../program_brief.html">Program in Brief</a></li>
                          <li class="li_sub"><a href="../keynote_speakers.html">Keynote Speakers</a></li>
                          <li class="li_sub"><a href="../editors_panel.html">Editors' Panel</a></li>
						  <li class="li_sub"><a href="../academic.html">Academic Leadership Forum</a></li>	
						  	-->
						  <li class="li_sub"><a href="../program_brief2010.html">Program in Brief</a></li>
                          <li class="li_sub"><a href="../keynote_speakers.html">Keynote Speakers</a><img src="../images/update_08.gif" width="30" height="10" /></li>
                          <li class="li_sub"><a href="../editors_panel.html">Editors' Panel</a></li>
						  <li class="li_sub"><a href="../academic.html">Academic Leadership Forum</a></li>					  
                        </ul>
                      </li>
                      <li class="li_title">Submission Info
                        <ul>
                          <!--
						  <li class="li_sub"><a href="../download.html">Download</a></li>
                          <li class="li_sub"><a href="../how_to_submit.html">How to submit?</a></li>
						  -->
						  <li class="li_sub"><a href="../download2010.html">Download</a></li>
                          <li class="li_sub"><a href="../how_to_submit.html">How to submit?</a></li>
                        </ul>
                      </li>
					   <li class="li_title">TIIM Proceedings
                         <ul>
                          <!--
						  <li class="li_sub"><a href="../docs/Format%20Guideline.pdf">Information</a></li>
                          <li class="li_sub"><a href="../sponsored_journals.html">Sponsored Journals</a></li>
						  -->
						  <li class="li_sub"><a href="../docs/Proceedings%20Instructions2010.pdf">Information</a></li>
                          <!--<li class="li_sub"><a href="../sponsored_journals.html">Sponsored Journals</a></li> -->
                        </ul>
                      </li>
                      <li class="li_title">E-Registration<br />
                        <ul>
                          <li class="li_sub"><a href="../registration.html">Registration</a></li>
						  <li class="li_sub"><a href="../user/index.php">Check Status</a></li>
						  <li class="li_sub"><a href="../payment.html">Payment</a></li>
						  <li class="li_sub"><a href="../admin/index.php">Administrator</a></li>
						  
                          <!--
                          <li class="li_sub"><a href="../regist_info.html">Info</a></li>
                          <li class="li_sub"><a href="../policy.html">Policy</a></li>
                          -->
                        </ul>
                      </li>
                      <li class="li_title">Location
                        <ul>
                          <!--
						  <li class="li_sub"><a href="../direction.html">Direction</a> <img src="../images/new.gif" /></li>
						  <li class="li_sub"><a href="../venue.html">Venue</a></li>
                          <li class="li_sub"><a href="../accommodation.html">Accommodation</a></li>
                          <li class="li_sub"><a href="../local_info.html">Local Info</a><br /></li>
                          <li class="li_sub"><a href="../climate.html">Climate</a></li>
						  -->
						  <li class="li_sub"><a href="../direction.html">Direction</a></li>
						  <li class="li_sub"><a href="#">Venue</a></li>
						   <li class="li_sub"><a href="../hotel.html">Rooms&Rates </a></li>
                          <li class="li_sub"><a href="#">Accommodation</a></li>
                          <li class="li_sub"><a href="#">Local Info</a><br /></li>
                          <li class="li_sub"><a href="#">Climate</a></li>
                        </ul>
                      </li>
                      </ul>
                    <p>&nbsp;</p>
                      </td>
                  </tr>
                </table>
            </td>
            <td width="560" align="left" valign="top" bgcolor="#ffffff">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr class="top_content">
                    <td align="left" valign="top" class="showdate" width="158">
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
                    </td>
                    <td align="left" valign="top" class="search_box">
                    <form id="form1" name="form1" method="post" action="">
                          <input name="search_txt" type="text" id="search_txt" size="28" class="input_search" />
                          <span class="search_btn"><img src="../images/btn_search.png" name="search" width="68" height="22" border="0" id="search" /></span>
                    </form></td>
                  </tr>
                </table>
                </td>
              </tr>
              <tr>
                <td align="left" valign="top">
				<!-- InstanceBeginEditable name="maincontent" -->
    <div id="main_content">
                  
                  <table width="100%" cellspacing=0>
				<tr>
					<td width="92%" align="left" ><h1>Payment:</h1></td>
					<td width="8%" align="right" class="h2"><b><a href="logout.php"></a></b></td>
				</tr>
			</table>

                  <? 


// user input checking
$error=0;
/*
if (trim($_POST["firstName"])=='') {
		echo '<strong>Missing:</strong> First name<br>';
		$error=1;
}
if (trim($_POST["lastName"])=='') {
		echo '<strong>Missing:</strong> Last name<br>';
		$error=1;
}
*/
/*
if (trim($_POST["address"])=='') {
		echo '<strong>Missing:</strong> Address<br>';
		$error=1;
}
*/
/*
if (trim($_REQUEST["email"])=='') {
		echo '<strong>Missing:</strong> Email address<br>';
		$error=1;
}
*/
/*
if (trim($_POST["emailRetype"]) != trim($_POST["email"])) {
		echo '<strong>Missing:</strong> Email address <strong>NOT LIKE</strong> Retype Email address<br>';
		$error=1;
}
*/
/*
if ( ! ereg("(.)@(.)",trim($_REQUEST["email"])) ) {
		echo '<strong>Missing:</strong> Email address <strong>FORMAT</strong> <br>';
		$error=1;
}
*/
/*
if (trim($_POST["reg_type"])=='') {
		echo '<strong>Missing:</strong> Registration type<br>';
		$error=1;
}
*/
/*
if ($error==1) {
	die('<br><a href="payment.html">Go Back</a>');
}
*/
?> 
                
<?
/*
$pwd =  createPassword(trim($_POST["email"]));
$sql = "INSERT INTO tiim_user (status,first_name,last_name,title,institution,address,city,postal_code,state_province,country,phone,fax,email,pwd,reg_type) VALUES (";
$sql .= " '".trim($_POST["status"])."'";
$sql .= ",'".trim($_POST["firstName"])."'";
$sql .= ",'".trim($_POST["lastName"])."'";
$sql .= ",'".trim($_POST["title"])."'";
$sql .= ",'".trim($_POST["institution"])."'";
$sql .= ",'".trim($_POST["address"])."'";
$sql .= ",'".trim($_POST["city"])."'";
$sql .= ",'".trim($_POST["postalCode"])."'";
$sql .= ",'".trim($_POST["stateProvince"])."'";
$sql .= ",'".trim($_POST["country"])."'";
$sql .= ",'".trim($_POST["phone"])."'";
$sql .= ",'".trim($_POST["fax"])."'";
$sql .= ",'".trim($_POST["email"])."'";
$sql .= ",'".$pwd."'";
$sql .= ",'".$_POST["reg_type"]."'";
$sql .= ")";
//echo $sql;
$result = mysql_query($sql);
*/
$result = 1;
//$method=3;
/*
$check=makeCksum();
$ticket_id = $check;
$username = encode($_POST["email"],$check);
$passwd = encode($pwd,$check);
//echo "<br>";
//echo decode(encode("password",$check),$check);

$url = "http://www.tiimconference.org/user/main.php?ticket_id=".$ticket_id."&my_username=".$username."&my_password=".$passwd;

$sql_url = "INSERT INTO tiim_url (email,url,status) VALUES (";
$sql_url .= " '".trim($_POST["email"])."'";
$sql_url .= ",'".trim($url)."'";
$sql_url .= ",0";
$sql_url .= ")";
//echo $sql_url;
//$result = mysql_query($sql_url);
*/

if ($result == 1){
	//echo "Successfully Registion. Please check your registered e-mail."."<br>";
	//echo "If you have a question or you feel that the system may not be working properly, please contact fengpta@ku.ac.th.";
	//sendMail_registered(trim($_POST["email"]),$pwd,trim($_POST["firstname"]),trim($_POST["lastname"]));
?>
		 <div id="main_content">
                  <p><u>Register Detail </u></p>
				  <form name="myform" method="post" action="payment_admin.php">
				  <input type="hidden" name="method" value="3">		
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="28%">&nbsp;</td>
                      <td width="72%">&nbsp;</td>
                    </tr>					
                    <tr>
                      <td class="field_label">Email address:</td>
                      <td><input name="email" type="text" id="email" size="30" /></td>
                    </tr>					
                    <tr>
                      <td class="field_label">&nbsp;</td>
                      <td>
					  <input name="payment" type="submit" value="Submit" />
					  <input name="reset" type="reset" />
					  </td>
                    </tr>
                  </table>
				  </form>				  
		 </div>
		 <!--
		 <p>Please select Method		   </p>
		 <div id="list_detail">
		 <ul>
		    <li><a href="main.php?method=2&email=<? echo $my_username?>">PayPal Method </a><br /></li>
			<li><a href="main.php?method=1&email=<? echo $my_username?>">Bank Transfer Method</a></li>		  
			<li><a href="main.php?method=3&email=<? echo $my_username?>">KrungSri e-Payment Method</a></li>		  
		 </ul>
		 </div>
		 -->
		 
         <? if($method==3){
						//###################################################
						// update payment runno then insert to tiim_payment_user
						//###################################################
						//------------------------------------------- runno order id
						$q_pay_run = mysql_query("SELECT * FROM tiim_payment_runno WHERE id=1;");
						$row_p_r = mysql_fetch_array($q_pay_run);
						$pay_run = $row_p_r['runno']+1;						
						 mysql_query("UPDATE tiim_payment_runno SET runno ='".$pay_run."' WHERE id=1;");						
						//----------------------------------
						switch (strlen(trim($pay_run))) {
						case 1:
							$prefix = "00000000";
							$order_id=$prefix.$pay_run;
							break;
						case 2:
							$prefix = "0000000";
							$order_id=$prefix.$pay_run;
							break;
						case 3:
							$prefix = "000000";
							$order_id=$prefix.$pay_run;
							break;
						case 4:
							$prefix = "00000";
							$order_id=$prefix.$pay_run;
							break;	
						case 5:
							$prefix = "0000";
							$order_id=$prefix.$pay_run;
							break;
						case 6:
							$prefix = "000";
							$order_id=$prefix.$pay_run;
							break;
						case 7:
							$prefix = "00";
							$order_id=$prefix.$pay_run;
							break;
						case 8:
							$prefix = "0";
							$order_id=$prefix.$pay_run;
							break;
						case 9:
							$order_id=$pay_run;
							break;							
						}											
						//echo $order_id."<br>";	
						$day = date("Y-m-d H:i:s");
						$q_ins_pay = "INSERT INTO tiim_payment_user (register_name, ORDERNUMBER, created_date) VALUES ('".$email."', '".$order_id."', '$day')";
						mysql_query($q_ins_pay);
						
				?>
<form action="https://www.krungsriepay.com/webapp/PaymentManager/PaymentInput " method="post" name="frm" onsubmit="return checkvisa(this)">
					<input type="hidden" name="MERCHANTNUMBER" value="950092940">
					<input type="hidden" name="ORDERNUMBER" value="<? echo $order_id;?>">
					<input type="hidden" name="PAYMENTTYPE" value='<?php echo "CreditCard";?>'>
					<input type="hidden" name="CURRENCY" value="840">
					<input type="hidden" name="AMOUNTEXP10" value="-2">
					<input type="hidden" name="LANGUAGE" value="EN">
					<input type="hidden" name="REF5" value="">										
                    <div id="main_content">
                  <p><u>Payment via Major Credit card (Visa, Master and JCB) </u></p>
				  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="search_td">
                    <tr>
                      <td width="28%">&nbsp;</td>
                      <td width="72%">&nbsp;</td>
                    </tr>					
                    <tr>
                      <td class="field_label">Email address:</td>
                      <td><input name="REF1" type="text" id="REF1" size="30" value="<? echo $email;?>" /></td>
                    </tr>
					<tr>
                      <td class="field_label">TIIM Paper No:</td>
                      <td><input name="REF2" type="text" id="REF2" size="30" value="" /> 
                      (eg. TIIM-10-XXX)</td>
                    </tr>
					<tr>
                      <td class="field_label">TIIM Paper No:</td>
                      <td><input name="REF3" type="text" id="REF3" size="30" value="" /> 
                      (eg. TIIM-10-XXX)</td>
                    </tr>
                    <tr>
                      <td class="field_label" valign="bottom" align="left"><img src="../images/securedicon.jpg" width="82" height="156" /></td>
                      <td>
					  <!--Script by hscripts.com-->
					<!--Copywrite of HIOXINDIA-->
					<!--More scripts @ http://hscripts.com-->
					<script language=javascript>
					var a=325; //set the value of first textbox.
					var b=400; //set the value of second textbox.
					var c=175; //set the value of third textbox.
					var d=175;
					var e=25;
					var f=25;
					var g=5;
					function app2()
					{						
					   if(frm.chk1.checked==true)
						   //if(frm.quantity.selectedIndex!=0){
								//w=frm.quantity.selectedIndex*b;							
								v=a;
							//}else{
								//v=0;							
							//}
					  else
						 //frm.txt.value=0;
						 v=0
					  if(frm.chk2.checked==true)
						 //frm.txt1.value=b;
						 //w=b;
						 //if(frm.quantity.selectedIndex!=0){
							//w=frm.quantity.selectedIndex*b;							
							w=b;
						//}else{
							//w=0;							
						//}
					  else
						//frm.txt1.value=0;
						w=0;
					  if(frm.chk3.checked==true)
						//frm.txt2.value=c;
						//x=c;
						if(frm.acc_quantity.selectedIndex!=0){
							//x=frm.acc_quantity.selectedIndex*c;							
							x=c;
						}else{
							x=0;							
						}						
					  else
						//frm.txt2.value=0;
						x=0;
					if(frm.chk4.checked==true)
						//frm.txt2.value=c;
						y=d;
					  else
						//frm.txt2.value=0;
						y=0;
						/*
					if(frm.chk5.checked==true)
						//frm.txt2.value=c;
						z=e;
					  else
						//frm.txt2.value=0;
						z=0;	
						*/
						if(frm.chk5.checked==true)
						//frm.txt2.value=c;
						s=e;
					  else
						//frm.txt2.value=0;
						s=0;	
						if(frm.chk6.checked==true)
						//frm.txt2.value=c;
						t=f;
					  else
						//frm.txt2.value=0;
						t=0;	
						if(frm.chk7.checked==true)
						//frm.txt2.value=c;
						u=g;
					  else
						//frm.txt2.value=0;
						u=0;	
						
					   var sum_reg;
					   var sum_acc;
					   var sum;
					   sum_reg=0;
					   sum_acc=0;
					   sum=0;
					  //if(frm.chk1.checked || frm.chk2.checked || frm.chk3.checked || frm.chk4.checked || frm.chk5.checked==true)
					  //if(frm.chk2.checked || frm.chk3.checked || frm.chk4.checked || frm.chk5.checked==true)
					  if(frm.chk1.checked || frm.chk2.checked || frm.chk3.checked || frm.chk4.checked  || frm.chk5.checked  || frm.chk6.checked  || frm.chk7.checked==true)
					  {
						//x=parseInt(a);
						//y=parseInt(b);
						//z=parseInt(c);						
						sum=0;
						
						if(frm.chk4.checked==true)
						{
						sum_reg=s+t+u;
						}
						
						sum_reg = sum_reg+v+w;
						
						//sum_reg = v+w;
						//alert("Parti: "+sum_reg);
						
						if(frm.acc_quantity.selectedIndex!=0){
							sum_acc=frm.acc_quantity.selectedIndex*(x)+frm.acc_quantity.selectedIndex*(s)+frm.acc_quantity.selectedIndex*(t)+frm.acc_quantity.selectedIndex*(u);
							//alert("Acc: "+sum_acc);
						} else {
							//sum=0;
							frm.AMOUNT_SHOW.value=sum_acc;
						}
						
						sum = sum_reg+sum_acc+y+s+t+u;
						//alert("Sum: "+sum);
						if(sum>0){						
						//sum = sum+y;
						//alert(sum);
						frm.AMOUNT_SHOW.value=sum;
						frm.AMOUNT.value=sum*100;
						}
						
					  }
					  else
						frm.AMOUNT_SHOW.value=0;   
					}
					</script>
					
					<!--Script by hscripts.com-->					
					  <?
					//$Cost = $row['price'];
					//$SandH = $row['weight'] * $ship_factor;
					//$Price = $Cost + $SandH;
					//$Price = 150;
					?>
					<!--
					Participant(s) 
					<select name="quantity" onchange="app2()">
					  <option value="0" selected="selected">-Select-</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					</select> Person(s)<br />
					-->
					<? 					
					//$date1='2007-10-10';
					$date1 = date('Y-n-j');
					$date2='2010-4-15';
					if(greaterDate($date1,$date2))   
					{
					//echo "First parameter is greater";
					//else   echo "Second parameter is greater";
					?>
					<input type="checkbox" name="chk2" onClick="app2()"> 
					<input name="chk1" type="hidden" value="" />
					Regular Registration Fee <span class="emp_text">(US$400)</span>
					<br />					
					<? } else {
					?>
					<input type="checkbox" name="chk1" onClick="app2()"> 
					<input name="chk2" type="hidden" value="" />
					Early Bird Rate (March 1st, 2010 – April 15th, 2010) Fee <span class="emp_text">(US$325)</span><br>
					<?
					}
					?>
					
					<input type="checkbox" name="chk4" onclick="app2()" />
Student Rate <span class="emp_text">(US$175)</span> <br />
<img src="../images/spacer.gif" width="20" height="1" />Proof of student status <br />
<img src="../images/spacer.gif" width="20" height="1" />(e.g. student ID card or letter from advisor) is   required. <br />
<img src="../images/spacer.gif" width="20" height="1" />The scan of proofs can be submitted via e-mail<br />
<img src="../images/spacer.gif" width="20" height="1" />to local coordinator   (fengpta@ku.ac.th). <br>
					<script language="javascript">					
						function enableField()
						{
							if(document.frm.acc_quantity.disabled) {
								document.frm.acc_quantity.disabled=false;
								document.frm.REF4.disabled=false;								
							} else {
								document.frm.acc_quantity.disabled=true;
								document.frm.REF4.disabled=true;
								frm.acc_quantity.selectedIndex=0;
							}
						}	
					</script>
  					<input type="checkbox" name="chk3" onClick="app2();enableField();">
Accompanying Person <span class="emp_text">(US$175)</span>
<!--<select name="acc_quantity" onchange="app()">-->
<select name="acc_quantity" disabled="disabled" onchange="app2()">
					  <option value="0" selected="selected">-Select-</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					</select> Person(s)
					<br />
					<img src="../images/spacer.gif" width="20" height="1" />Name:
					<br />
					<img src="../images/spacer.gif" width="20" height="1" />
					<textarea name="REF4" disabled="disabled" cols="40" rows="5"></textarea>
					<br />
					<input type="checkbox" name="chk5" onClick="app2()">
					TIIM2010 VAN from Suvarnabhumi Int. Airport <br />
					to Royal Cliff Beach Hotel (TIIM2010 Site) <span class="emp_text">(US$25)</span> per 1 person. <br /> 
					<input type="checkbox" name="chk6" onClick="app2()">
					TIIM2010 VAN from Royal Cliff Beach Hotel (TIIM2010 Site) <br />
					to Suvarnabhumi Int. Airport <span class="emp_text">(US$25)</span> per 1 person.<br />
					<input type="checkbox" name="chk7" onClick="app2()">
					Extra charge for drop-off at other hotels in nearby Pattaya &amp; Jomtian area <span class="emp_text">(US$5)</span> per 1 person.<br />
(Only for Suvarnabhumi Int. Airport to Pattaya)<br />
					<br />
					<input name="chk_agree" type="checkbox" />
					I agree with <a href="#" onclick="MM_openBrWindow('../terms_conditions.html','','scrollbars=yes,resizable=yes,width=800,height=600')">Terms   &amp; Conditions</a> and<a href="#" onclick="MM_openBrWindow('../refund.html','','scrollbars=yes,width=800,height=600')"> Refund Policy.</a><br>
					<br>					
					
					Total Fee : <input type="text" name="AMOUNT_SHOW" READONLY>
					<input type="hidden" name="AMOUNT">
					US dollars<br />
					<br>

					  	<!--<input type="hidden" name="amount" value='<?php echo($Price) ?>'>-->						
						<input name="payment" type="submit" value="Submit" />						</td>
                    </tr>
                    <tr>
                      <td class="field_label">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="field_label">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="field_label">&nbsp;</td>
                      <td><strong>If you have any problem, <br />
please contact local   coordinator</strong> (<a href="mailto:fengpta@ku.ac.th">fengpta@ku.ac.th</a>)</td>
                    </tr>
                  </table>
                    </div>
				</form>	
				<? }?>
<?	
}else{
	echo "An error occures during registration process, please try again later.<br>";
	echo mysql_errno($link) . ": " . mysql_error($link). "\n";
}

//echo '<p><br><input type="submit" value="Go Back" onclick="location.href(\'registration.html\')" /></p>';

?>
                  
    <p>&nbsp;</p>
    </div> 
				<!-- InstanceEndEditable --></td>
              </tr>
              <tr>
                <td align="left" valign="top">
                <div class="picture">
                   <img src="../images/pic4.jpg" width="163" height="94" />              </div>
                <div class="picture">
                 <img src="../images/pic7.jpg" width="163" height="94" />               </div>
               <div class="picture">
                   <img src="../images/pic8.jpg" width="163" height="94" />                </div>
               </td>
              </tr>

            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#006f94" class="copyright">Kasetsart University  50 Phaholyothin Rd. Bangkok 10900<br />          
        &copy; Copyright 2009. TIIM Conference 2013.</td>
      </tr>
    </table></td>
    <td width="10" align="left" valign="top" background="../images/shadow_right_bg.png"><img src="../images/shadow_right.png" /></td>
  </tr>
</table>
</div>

<map name="Map" id="Map"><area shape="rect" coords="10,8,57,27" href="../index.php" />
</map></body>
<!-- InstanceEnd --></html>
