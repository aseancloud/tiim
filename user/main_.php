<?
require_once "validate_user.php";
require_once "../connect_db.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_TIIM.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>TIIM Conference 2010</title>
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

<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {
	color: #9C0000;
	font-weight: bold;
}
-->
</style>
<!-- InstanceEndEditable -->
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('../images/btn_search_h.png')">
<div id="container">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0" class="h">
  <tr>
    <td width="10" align="left" valign="top" background="../images/shadow_left_bg.png"><img src="../images/shadow_left.png" /></td>
    <td width="746" align="left" valign="top" class="h"><table width="746" height="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="topbar"><span class="top_link"><a class="links" href="http://www.tiimconference.org">www.tiimconference.org</a></span><span class="top_menu"><a class="links" href="../index.html"><img src="../images/spacer.gif" width="380" height="1" />Home</a> | <a class="links" href="../contact.html">Contact</a> | <a class="links" href="http://www.tiimconference.org/tiim2009">TIIM 2009</a></span></td>
      </tr>
      <tr>
        <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','746','height','191','src','swf/headWeb','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','swf/headWeb' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="746" height="191">
          <param name="movie" value="../Templates/swf/headWeb.swf" />
          <param name="quality" value="high" />
          <embed src="../Templates/swf/headWeb.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="746" height="191"></embed>
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
						  <li class="li_sub"><a href="index.php">Check Status</a></li>
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
                          <input name="search_txt" type="text" id="search_txt" size="36" class="input_search" />
                          <span class="search_btn"><img src="../images/btn_search.png" name="search" width="68" height="22" border="0" id="search" /></span>
                    </form></td>
                  </tr>
                </table>
                </td>
              </tr>
              <tr>
                <td align="left" valign="top">
				<!-- InstanceBeginEditable name="maincontent" -->
<script language="JavaScript" type="text/javascript">
//edit paper
 function addNewRow1() {

    if (this.table1 == null) {
        this.table1 = document.getElementById("invoice1");
    }
    var index = this.table1.rows.length; // n //o-n-1

    var row = this.table1.insertRow(index);

     if(index%2==0) row.bgColor="#DEDBDE";
     else  row.bgColor="white";
		
     row.identity = index;
     //alert(index);
	 if(index < 26){
    var td0 = row.insertCell(0);
    td0.innerHTML = " <img src='../images/del.gif' onClick='removeRow1("+index+")' class='cursor'>";
	/*
    var td1 = row.insertCell(1);
    td1.innerHTML = "<input type='text' name='accountId_"+ index + "'  id='accountId" + index + "'  onBlur='autoCheck("+index+")'> ";
	*/
    var td2 = row.insertCell(1);
    //td2.innerHTML = "<input type='text' name='accountName[]" + "'  id='accountName" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	td2.innerHTML = "<select id='title1'"+index+" name='title1[]' class='text'><option value='0'>-</option><option value='1'>Mr.</option>              <option value='2'>Ms.</option><option value='3'>Mrs.</option><option value='4'>Dr.</option></select>";
	
	 var td3 = row.insertCell(2);		
	 td3.innerHTML = "<input type='text' name='FirstName1[]" + "'  id='FirstName1" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td4 = row.insertCell(3);		
	 td4.innerHTML = "<input type='text' name='LastName1[]" + "'  id='LastName1" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td5 = row.insertCell(4);		
	 td5.innerHTML = "<input type='text' name='email1[]" + "'  id='email1" + index + "' value = '' size='15' maxlength='80' class='text'/>";
	 
	 var td6 = row.insertCell(5);		
	 td6.innerHTML = "<input type='text' name='Telephone1[]" + "'  id='Telephone1" + index + "' value = '' size='10' maxlength='80' class='text'/>";
	 
	  
	
    /*
	var td3 = row.insertCell(3);
    td3.innerHTML = "<input type='text' name='accountTotal"+ index + "'  id='accountTotal" + index + "' class='i' onKeyPress='return(currencyFormat(this,\",\",\".\",event))'  onBlur='sumAmount()' style=\"text-align:right\" /> <input type='hidden' name='accountTotal_"+ index + "'  id='accountTotal_" + index + "'/>";
	*/
	}else{
		alert("You can't add more.");
	}
}

function removeRow1(index) {
     if(index==1){
         this.table1.deleteRow(1);
     }

    for(var i = 0; i < this.table1.rows.length; i++) {
        if(index == this.table1.rows[i].identity){
            this.table1.deleteRow(i);
        }
    }
}
//end edit paper
//add paper
 function addNewRow() {

    if (this.table1 == null) {
        this.table1 = document.getElementById("invoice");
    }
    var index = this.table1.rows.length; // n //o-n-1

    var row = this.table1.insertRow(index);

     if(index%2==0) row.bgColor="#DEDBDE";
     else  row.bgColor="white";
		
     row.identity = index;
     //alert(index);
	 if(index < 26){
    var td0 = row.insertCell(0);
    td0.innerHTML = " <img src='../images/del.gif' onClick='removeRow("+index+")' class='cursor'>";
	/*
    var td1 = row.insertCell(1);
    td1.innerHTML = "<input type='text' name='accountId_"+ index + "'  id='accountId" + index + "'  onBlur='autoCheck("+index+")'> ";
	*/
    var td2 = row.insertCell(1);
    //td2.innerHTML = "<input type='text' name='accountName[]" + "'  id='accountName" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	td2.innerHTML = "<select id='title'"+index+" name='title[]' class='text'><option value='0'>-</option><option value='1'>Mr.</option>              <option value='2'>Ms.</option><option value='3'>Mrs.</option><option value='4'>Dr.</option></select>";
	
	 var td3 = row.insertCell(2);		
	 td3.innerHTML = "<input type='text' name='FirstName[]" + "'  id='FirstName" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td4 = row.insertCell(3);		
	 td4.innerHTML = "<input type='text' name='LastName[]" + "'  id='LastName" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td5 = row.insertCell(4);		
	 td5.innerHTML = "<input type='text' name='email[]" + "'  id='email" + index + "' value = '' size='15' maxlength='80' class='text'/>";
	 
	 var td6 = row.insertCell(5);		
	 td6.innerHTML = "<input type='text' name='Telephone[]" + "'  id='Telephone" + index + "' value = '' size='10' maxlength='80' class='text'/>";
	 
	  
	
    /*
	var td3 = row.insertCell(3);
    td3.innerHTML = "<input type='text' name='accountTotal"+ index + "'  id='accountTotal" + index + "' class='i' onKeyPress='return(currencyFormat(this,\",\",\".\",event))'  onBlur='sumAmount()' style=\"text-align:right\" /> <input type='hidden' name='accountTotal_"+ index + "'  id='accountTotal_" + index + "'/>";
	*/
	}else{
		alert("You can't add more.");
	}
}

function removeRow(index) {
     if(index==1){
         this.table1.deleteRow(1);
     }

    for(var i = 0; i < this.table1.rows.length; i++) {
        if(index == this.table1.rows[i].identity){
            this.table1.deleteRow(i);
        }
    }
}
//end add paper
function validate_form(form) {
if(form.project.value == "") {
		alert("Please input Paper Name !");
		form.project.focus();
		return false;
	}		
	else if(form.description.value=="") {
		alert("Please input Description !") ;
		form.description.focus() ;
		return false ;
	}
	else if(form.institution.value=="") {
		alert("Please input Institution !") ;
		form.institution.focus() ;
		return false ;
	}
else 
return true ;
}	

function validate_abs(form) {
if(form.paper_id.selectedIndex==0) {
		alert("Please select Paper Name !") ;
		return false ;
	}	
	else if(form.abstract_file.value=="") {
		alert("Please input Abstract File !") ;
		form.abstract_file.focus() ;
		return false ;
	}
else 
return true ;
}	

function validate_full(form) {
if(form.paper_id.selectedIndex==0) {
		alert("Please select Paper Name !") ;
		return false ;
	}	
	else if(form.full_paper.value=="") {
		alert("Please input Full Paper File !") ;
		form.full_paper.focus() ;
		return false ;
	}
else 
return true ;
}	

function iconfirmdel(in_url){
				if( confirm("Do you want to Delete?") ){   
						document.location =in_url; 
					 }
}
</script>                

<p class="h1"><b>Welcome <? echo $username;//$_SESSION['my_username'];?></b><br />
If you have a question or you feel that the system may not be working properly, please contact <a href="mailto:fengpta@ku.ac.th">fengpta@ku.ac.th</a> </p>

<table width="100%" cellspacing=0>
	<tr>
		<td align="left" class="h2"><span class="style1">Add Your New Papers (Maximun 2 Papers per 1 Register Name) </span></td>
		<td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td>
	</tr>
</table>
<?
		$sql = " SELECT id,project_name FROM tiim_paper WHERE register_name = '".$username."'";

		$result = @mysql_query($sql) or die(mysql_error());
		
		if(@mysql_num_rows($result)==2){
			$max = 1;
		} else {
			$max = 0;
		}
		mysql_free_result($result);
	
?>	
<form action="upload.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onsubmit="return validate_form (this);">
  <br />
  <table width="95%" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td>Register Name</td>
      <td bordercolor="#D6D3CE"><? echo $username;?></td>
    </tr>
    <tr>
      <td>Paper Code </td>
      <td><label>
        <input type="text" name="project" id="project"  value="[auto no.]" readonly="" />
      </label></td>
    </tr>
    <tr>
      <td>Paper Title </td>
      <td><label>
        <textarea name="description" id="description" cols="45" rows="5" ></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Institution</td>
      <td><label>
        <input type="text" name="institution" id="institution" />
      </label></td>
    </tr>
    <!--
    <tr>
      <td>Abstract Document</td>
      <td><label>
        <input type="file" name="abstract_file" id="abstract_file" />
      </label></td>
    </tr>
    <tr>
      <td>Full Paper</td>
      <td><label>
        <input type="file" name="full_paper" id="full_paper" />
      </label></td>
    </tr>
	-->
    <tr>
      <td colspan="2">Co-Author</td>
    </tr>
    <tr>
      <td colspan="2"><table width="100%" id="invoice" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr class="lmnbg">
          <td>&nbsp;</td>
          <th width="12%"  align="center" bgcolor="#DEDBDE">Title</th>
          <th width="24%"  align="center" bgcolor="#DEDBDE">Firstname</th>
          <th width="24%"  align="center" bgcolor="#DEDBDE">Lastname</th>
          <th width="23%"  align="center" bgcolor="#DEDBDE">Email</th>
          <th width="14%"  align="center" bgcolor="#DEDBDE">Telphone</th>
        </tr>
        <tr class="lmnbg">
          <td width="3%"><img src="../images/add.gif" onclick="addNewRow()" class="cursor" /></td>
          <td colspan="5" class="bwhite">Description of the data set</td>
          <!--<td width="19%" align="center">ACCOUNT_CODE</td>-->
          <!--<td width="200" align="center">TOTAL</td>-->
        </tr>
        <tr bgcolor="white">
          <td ><!--<input type=button value=Del class=button_ onclick=removeRow(1)>-->
                <!--<img src="../images/del.gif" onclick="removeRow(1)" class="cursor" /> --></td>
          <td><select id="select" name="title[]" class="text">
            <option value="0">-</option>
            <option value="1">Mr.</option>
            <option value="2">Ms.</option>
            <option value="3">Mrs.</option>
            <option value="4">Dr.</option>
          </select>          </td>
          <td><input type="text" id="FirstName1" name="FirstName[]" size="16" maxlength="80" class="text"/></td>
          <td><input type="text" id="LastName1" name="LastName[]" size="16" maxlength="80" class="text"/></td>
          <td><input type="text" id="email1" name="email[]" size="15" maxlength="80" class="text"/></td>
          <td><input type="text" id="Telephone1" name="Telephone[]" size="10" maxlength="80" class="text"/></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="paper" id="button" value="Save" <? if($max==1) echo 'disabled="disabled"'; ?> onclick="return confirm('Are you confirm your information?')" /></td>
    </tr>
  </table>
</form>
  <br />
  <hr />  
  <table width="100%" cellspacing="0">
    <tr>
      <td align="left" class="h2"><span class="style1">Add Your Abstract Papers</span></td>
      <td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td>
    </tr>
  </table><br />

  <form id="form4" name="form4" method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return validate_abs (this);">
    <table width="95%" border="0" cellpadding="2" cellspacing="1" align="center">
      <tr>
        <td colspan="2"><strong>Abstract Document</strong></td>
        </tr>
      <tr>
        <td width="21%">Register Name</td>
        <td width="79%"><? echo $username;?></td>
      </tr>
      <tr>
        <td>Paper Name</td>
        <td>
		<select name="paper_id">
			<option value="0">-Select-</option>
			<?
				$sql = " SELECT id,project_name FROM tiim_paper WHERE register_name = '".$username."'";

				$result = @mysql_query($sql) or die(mysql_error());
				while ($row = @mysql_fetch_array($result)) {
			?>
			<option value="<? echo $row['id'];?>"><? echo $row['project_name'];?></option>
			<?
				}
				mysql_free_result($result);
			?>
        </select>        </td>
      </tr>
      <tr>
      <td>Abstract Document</td>
      <td><label>
        <input type="file" name="abstract_file" id="abstract_file" />
      </label></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="abstract" id="button3" value="Save" onclick="return confirm('Are you confirm your information?')" /></td>
      </tr>
    </table>
  </form>
  <br />
  <hr />
  
  <table width="100%" cellspacing="0">
    <tr>
      <td align="left" class="h2"><span class="style1">Add Your Full Papers</span></td>
      <td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td>
    </tr>
  </table>
  <form id="form5" name="form5" method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return validate_full (this);">
    <br />
    <table width="95%" border="0" cellpadding="2" cellspacing="1" align="center">
      <tr>
        <td colspan="2"><strong>Full Paper  Document</strong></td>
      </tr>
      <tr>
        <td width="21%">Register Name</td>
        <td width="79%"><? echo $username;?></td>
      </tr>
      <tr>
        <td>Paper Name</td>
        <td><select name="paper_id">
            <option value="0">-Select-</option>
			
			<?
				$sql = " SELECT id,project_name FROM tiim_paper WHERE register_name = '".$username."'";

				$result = @mysql_query($sql) or die(mysql_error());
				while ($row = @mysql_fetch_array($result)) {
			?>
			<option value="<? echo $row['id'];?>"><? echo $row['project_name'];?></option>
			<?
				}
				mysql_free_result($result);
			?>
			
          </select>        </td>
      </tr>
      <tr>
        <td>Full Paper</td>
        <td><label>
          <input type="file" name="full_paper" id="full_paper" />
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="fullpaper" id="button32" value="Save" onclick="return confirm('Are you confirm your information?')" /></td>
      </tr>
    </table>
  </form>
  <!--==============================================================-->
  <br />
  <hr />
    <table width="100%" cellspacing=0>
	<tr>
		<td align="left" class="h2"><span class="style1">Your  Papers Status</span></td>
		<td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td>
	</tr>
</table>
<?
	
	
	$sql = " SELECT * FROM tiim_paper WHERE register_name = '".$username."'";
	//echo  $sql;
	
	$result = @mysql_query($sql) or die(mysql_error());
	
	if(@mysql_num_rows($result)==0){
		echo "No Data.";	
	}
	
	while ($row = @mysql_fetch_array($result)) {	
	?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? $papercode= $row['project_name'];
    	echo  "<a href=\"javascript:;\" onclick=\"window.open('editpaper.php?papercode=$papercode','show','toolbar=0,location=0,directories=0,status=0,menubar=0,resizeable=0,scrollbars=1 ,height=500,width=600');\" >Edit</a> ";  ?>
    </a><br />
	
	<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <th width="30%" bgcolor="#DEDBDE" scope="col"><div align="center">#</div></th>
        <th width="70%" bgcolor="#DEDBDE" scope="col"><div align="center">Detail</div></th>       
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
			echo '<td>'.$row4['telephone'].'</td>';
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
		
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
		  <tr>
		    <th bgcolor="#DEDBDE" scope="col"><div align="center">action</div></th>
			<th bgcolor="#DEDBDE" scope="col" width="50%"><div align="center"><strong>Abstract</strong> Document</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Paper Name</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Date</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Document</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Status</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Status</div></th>
		  </tr>
	<?
	
	
		   
		$sql2 = " SELECT * FROM tiim_abstract_paper WHERE ref_id = '".$row['id']."' AND active =1";
		
		$result2 = @mysql_query($sql2) or die(mysql_error());
		
		while ($row2 = @mysql_fetch_assoc($result2)) {
			echo '<tr>';
			//echo '<td align="center"><a href><img src="../images/trash_16.png" border=0></a></td>';
			echo "<td align=\"center\"><a href=\"javascript:iconfirmdel('del.php?abs=1&id=".$row2['id']."&ref_id=".$row2['ref_id']."')\"><img src=\"../images/trash_16.png\" border=\"0\" align=\"absmiddle\" alt=\"Delete\"></a></td>";
			//echo '<td>'.$row['project_name'].'</td>';
			//echo '<td>'.$row['institution'].'</td>';	
			
			echo '<td>';
			if ($row2['abstract'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/'.$row['id'].'/abstract/'.$row2['abstract'].'" target="_blank">Abstract</a>&nbsp;';
			echo '</td>'; 
			echo '<td>'.$row2['date'].'</td>';
			/*
			if ($row['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';
			echo '</td>'; 
			*/
			echo '<td>'.$row2['status'].'&nbsp;</td>';
			//echo '<td>'.$row['payment'].'&nbsp;</td>';
			
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
			<td>&nbsp;</td>
				-->
		  </tr>
		  <tr>
		    <td colspan="3">NOTE : Author can update abstract/full paper when the status is “Received” or “Accepted with revision” </td>
		    </tr>
		</table>
		<br />
		<!-- End Abstract -->  

		<!-- Full -->  
		
		<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
		  <tr>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">action</div></th>
			<th bgcolor="#DEDBDE" scope="col" width="50%"><div align="center"><strong>Full</strong> Document</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Paper Name</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Institution</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Date</div></th>
			<!--<th bgcolor="#DEDBDE" scope="col"><div align="center">Document</div></th>
			<th bgcolor="#DEDBDE" scope="col"><div align="center">Status</div></th>-->
			<th bgcolor="#DEDBDE" scope="col" width="25%"><div align="center">Status</div></th>
		  </tr>
	<?
	
	
		   
		$sql3 = " SELECT * FROM tiim_full_paper WHERE ref_id = '".$row['id']."' AND active =1";
		
		$result3 = @mysql_query($sql3) or die(mysql_error());
		
		while ($row3 = @mysql_fetch_assoc($result3)) {
			echo '<tr>';
			//echo '<td>'.$row['register_name'].'</td>';
			//echo '<td>'.$row['project_name'].'</td>';
			//echo '<td>'.$row['institution'].'</td>';	
			
			echo "<td align=\"center\"><a href=\"javascript:iconfirmdel('del.php?full=1&id=".$row3['id']."&ref_id=".$row3['ref_id']."')\"><img src=\"../images/trash_16.png\" border=\"0\" align=\"absmiddle\" alt=\"Delete\"></a></td>";
			
			echo '<td>';
			if ($row3['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/'.$row['id'].'/fullpaper/'.$row3['full_paper'].'" target="_blank">Full Paper</a>&nbsp;';
			echo '</td>'; 
			echo '<td>'.$row3['date'].'</td>';
			/*
			if ($row['full_paper'] !='')	echo '&nbsp;<a href="uploads/'.$username.'/fullpaper/'.$row['full_paper'].'" target="_blank">Full Paper</a>';
			echo '</td>'; 
			*/
			echo '<td>'.$row3['status'].'&nbsp;</td>';
			//echo '<td>'.$row['payment'].'&nbsp;</td>';
			
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
			<td>&nbsp;</td>
				-->
		  </tr>
		  <tr>
		    <td colspan="3">NOTE : Author can update abstract/full paper when the status is “Received” or “Accepted with revision” </td>
		    </tr>
		</table>
		
		<br />
		<hr width="400" align="center" /><br />

		<!-- End Full -->  
		
	<? 
	}
	?>
	
	<!--==============================================================-->
	<br />
    <hr />
    <table width="100%" cellspacing="0">
      <tr>
        <td align="left" class="h2"><span class="style1">Your  Profile</span></td>
        <td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td>
      </tr>
    </table>
    <br />
    
    
<?

require_once "../connect_db.php";
       
$sql = " SELECT * FROM tiim_user WHERE email = '".$username."'";

$result = mysql_query($sql) or die(mysql_error());

while ($row = mysql_fetch_assoc($result)) {

?>   
    
    <form id="form3" name="form3" method="post" action="update_profile.php">
      <table align="center" cellpadding="0" cellspacing="0">
        <tr  bgcolor="#F7F7F7">
          <td width="28%"></td>
          <td width="72%">
            <input id="radio" type="radio" value="Mr" name="status" 
		    <? if($row['status']=='Mr') echo 'checked';?>/>
            Mr
          	<input id="radio" type="radio" value="Mrs" name="status" 
            <? if($row['status']=='Mrs') echo 'checked';?>/>
            Mrs
            <input id="radio" type="radio" value="Miss" name="status" 
            <? if($row['status']=='Miss') echo 'checked';?>/>
            Miss
			<input id="radio" type="radio" value="Dr" name="status" 
            <? if($row['status']=='Dr') echo 'checked';?>/>
            Mrs			</td>
        </tr>
        <tr>
          <td>First name:</td>
          <td><input size="30" name="first_name" value="<? echo $row['first_name'];?>"/></td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td >Last name:</td>
          <td ><input size="30" name="last_name" value="<? echo $row['last_name'];?>"/></td>
        </tr>
        <tr>
          <td>Title:</td>
          <td><input size="30" name="title" value="<? echo $row['title'];?>"/></td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td>Institution:</td>
          <td><input id="institution" size="30" name="institution" value="<? echo $row['institution'];?>"/></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td><input id="address" size="30" name="address" value="<? echo $row['address'];?>"/></td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td>City:</td>
          <td><input id="city" size="30" name="city" value="<? echo $row['city'];?>"/></td>
        </tr>
        <tr>
          <td>Postal code:</td>
          <td><input id="postal_code" size="15" name="postal_code" value="<? echo $row['postal_code'];?>"/></td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td>State/Province</td>
          <td><input id="state_province" size="30" name="state_province" value="<? echo $row['state_province'];?>"/></td>
        </tr>
        <tr>
          <td>Country:</td>
          <td><select id="country" name="country">
              <option <? if($row['country']=='') echo 'selected';?> value="" >Select</option>
              <option <? if($row['country']=='AF') echo 'selected';?> value="AF">AFGHANISTAN</option>
              <option <? if($row['country']=='AL') echo 'selected';?> value="AL">ALBANIA</option>
              <option <? if($row['country']=='DZ') echo 'selected';?> value="DZ">ALGERIA</option>
              <option <? if($row['country']=='AS') echo 'selected';?> value="AS">AMERICAN SAMOA</option>
              <option <? if($row['country']=='AD') echo 'selected';?> value="AD">ANDORRA</option>
              <option <? if($row['country']=='AO') echo 'selected';?> value="AO">ANGOLA</option>
              <option <? if($row['country']=='AI') echo 'selected';?> value="AI">ANGUILLA</option>
              <option <? if($row['country']=='AQ') echo 'selected';?> value="AQ">ANTARCTICA</option>
              <option <? if($row['country']=='AG') echo 'selected';?> value="AG">ANTIGUA AND BARBUDA</option>
              <option <? if($row['country']=='AR') echo 'selected';?> value="AR">ARGENTINA</option>
              <option <? if($row['country']=='AM') echo 'selected';?> value="AM">ARMENIA</option>
              <option <? if($row['country']=='AW') echo 'selected';?> value="AW">ARUBA</option>
              <option <? if($row['country']=='AU') echo 'selected';?> value="AU">AUSTRALIA</option>
              <option <? if($row['country']=='AT') echo 'selected';?> value="AT">AUSTRIA</option>
              <option <? if($row['country']=='AZ') echo 'selected';?> value="AZ">AZERBAIJAN</option>
              <option <? if($row['country']=='BS') echo 'selected';?> value="BS">BAHAMAS</option>
              <option <? if($row['country']=='BH') echo 'selected';?> value="BH">BAHRAIN</option>
              <option <? if($row['country']=='BD') echo 'selected';?> value="BD">BANGLADESH</option>
              <option <? if($row['country']=='BB') echo 'selected';?> value="BB">BARBADOS</option>
              <option <? if($row['country']=='BY') echo 'selected';?> value="BY">BELARUS</option>
              <option <? if($row['country']=='BE') echo 'selected';?> value="BE">BELGIUM</option>
              <option <? if($row['country']=='BZ') echo 'selected';?> value="BZ">BELIZE</option>
              <option <? if($row['country']=='BJ') echo 'selected';?> value="BJ">BENIN</option>
              <option <? if($row['country']=='BM') echo 'selected';?> value="BM">BERMUDA</option>
              <option <? if($row['country']=='BT') echo 'selected';?> value="BT">BHUTAN</option>
              <option <? if($row['country']=='BO') echo 'selected';?> value="BO">BOLIVIA</option>
              <option <? if($row['country']=='BA') echo 'selected';?> value="BA">BOSNIA AND HERZEGOVINA</option>
              <option <? if($row['country']=='BW') echo 'selected';?> value="BW">BOTSWANA</option>
              <option <? if($row['country']=='BV') echo 'selected';?> value="BV">BOUVET ISLAND</option>
              <option <? if($row['country']=='BR') echo 'selected';?> value="BR">BRAZIL</option>
              <option <? if($row['country']=='IO') echo 'selected';?> value="IO">BRITISH INDIAN OCEAN   TERRITORY</option>
              <option <? if($row['country']=='BN') echo 'selected';?> value="BN">BRUNEI DARUSSALAM</option>
              <option <? if($row['country']=='BG') echo 'selected';?> value="BG">BULGARIA</option>
              <option <? if($row['country']=='BF') echo 'selected';?> value="BF">BURKINA FASO</option>
              <option <? if($row['country']=='BI') echo 'selected';?> value="BI">BURUNDI</option>
              <option <? if($row['country']=='KH') echo 'selected';?> value="KH">CAMBODIA</option>
              <option <? if($row['country']=='CM') echo 'selected';?> value="CM">CAMEROON</option>
              <option <? if($row['country']=='CA') echo 'selected';?> value="CA">CANADA</option>
              <option <? if($row['country']=='CV') echo 'selected';?> value="CV">CAPE VERDE</option>
              <option <? if($row['country']=='KY') echo 'selected';?> value="KY">CAYMAN ISLANDS</option>
              <option <? if($row['country']=='CF') echo 'selected';?> value="CF">CENTRAL AFRICAN REPUBLIC</option>
              <option <? if($row['country']=='TD') echo 'selected';?> value="TD">CHAD</option>
              <option <? if($row['country']=='CL') echo 'selected';?> value="CL">CHILE</option>
              <option <? if($row['country']=='CN') echo 'selected';?> value="CN">CHINA</option>
              <option <? if($row['country']=='CX') echo 'selected';?> value="CX">CHRISTMAS ISLAND</option>
              <option <? if($row['country']=='CC') echo 'selected';?> value="CC">COCOS (KEELING)   ISLANDS</option>
              <option <? if($row['country']=='CO') echo 'selected';?> value="CO">COLOMBIA</option>
              <option <? if($row['country']=='KM') echo 'selected';?> value="KM">COMOROS</option>
              <option <? if($row['country']=='CG') echo 'selected';?> value="CG">CONGO</option>
              <option <? if($row['country']=='CK') echo 'selected';?> value="CK">COOK   ISLANDS</option>
              <option <? if($row['country']=='CR') echo 'selected';?> value="CR">COSTA RICA</option>
              <option <? if($row['country']=='HR') echo 'selected';?> value="HR">CROATIA</option>
              <option <? if($row['country']=='CU') echo 'selected';?> value="CU">CUBA</option>
              <option <? if($row['country']=='CY') echo 'selected';?> value="CY">CYPRUS</option>
              <option <? if($row['country']=='CZ') echo 'selected';?> value="CZ">CZECH REPUBLIC</option>
              <option <? if($row['country']=='CI') echo 'selected';?> value="CI">COTE D'IVOIRE</option>
              <option <? if($row['country']=='DK') echo 'selected';?> value="DK">DENMARK</option>
              <option <? if($row['country']=='DJ') echo 'selected';?> value="DJ">DJIBOUTI</option>
              <option <? if($row['country']=='DM') echo 'selected';?> value="DM">DOMINICA</option>
              <option <? if($row['country']=='DO') echo 'selected';?> value="DO">DOMINICAN REPUBLIC</option>
              <option <? if($row['country']=='TP') echo 'selected';?> value="TP">EAST TIMOR</option>
              <option <? if($row['country']=='EC') echo 'selected';?> value="EC">ECUADOR</option>
              <option <? if($row['country']=='EG') echo 'selected';?> value="EG">EGYPT</option>
              <option <? if($row['country']=='SV') echo 'selected';?> value="SV">EL SALVADOR</option>
              <option <? if($row['country']=='GQ') echo 'selected';?> value="GQ">EQUATORIAL GUINEA</option>
              <option <? if($row['country']=='ER') echo 'selected';?> value="ER">ERITREA</option>
              <option <? if($row['country']=='EE') echo 'selected';?> value="EE">ESTONIA</option>
              <option <? if($row['country']=='ET') echo 'selected';?> value="ET">ETHIOPIA</option>
              <option <? if($row['country']=='FK') echo 'selected';?> value="FK">FALKLAND ISLANDS</option>
              <option <? if($row['country']=='FO') echo 'selected';?> value="FO">FAROE ISLANDS</option>
              <option <? if($row['country']=='FJ') echo 'selected';?> value="FJ">FIJI</option>
              <option <? if($row['country']=='FI') echo 'selected';?> value="FI">FINLAND</option>
              <option <? if($row['country']=='FR') echo 'selected';?> value="FR">FRANCE</option>
              <option <? if($row['country']=='GF') echo 'selected';?> value="GF">FRENCH GUIANA</option>
              <option <? if($row['country']=='PF') echo 'selected';?> value="PF">FRENCH POLYNESIA</option>
              <option <? if($row['country']=='TF') echo 'selected';?> value="TF">FRENCH SOUTHERN TERRITORIES</option>
              <option <? if($row['country']=='GA') echo 'selected';?> value="GA">GABON</option>
              <option <? if($row['country']=='GM') echo 'selected';?> value="GM">GAMBIA</option>
              <option <? if($row['country']=='GE') echo 'selected';?> value="GE">GEORGIA</option>
              <option <? if($row['country']=='DE') echo 'selected';?> value="DE">GERMANY</option>
              <option <? if($row['country']=='GH') echo 'selected';?> value="GH">GHANA</option>
              <option <? if($row['country']=='GI') echo 'selected';?> value="GI">GIBRALTAR</option>
              <option <? if($row['country']=='GR') echo 'selected';?> value="GR">GREECE</option>
              <option <? if($row['country']=='GL') echo 'selected';?> value="GL">GREENLAND</option>
              <option <? if($row['country']=='GD') echo 'selected';?> value="GD">GRENADA</option>
              <option <? if($row['country']=='GP') echo 'selected';?> value="GP">GUADELOUPE</option>
              <option <? if($row['country']=='GU') echo 'selected';?> value="GU">GUAM</option>
              <option <? if($row['country']=='GT') echo 'selected';?> value="GT">GUATEMALA</option>
              <option <? if($row['country']=='GN') echo 'selected';?> value="GN">GUINEA</option>
              <option <? if($row['country']=='GW') echo 'selected';?> value="GW">GUINEA-BISSAU</option>
              <option <? if($row['country']=='GY') echo 'selected';?> value="GY">GUYANA</option>
              <option <? if($row['country']=='HT') echo 'selected';?> value="HT">HAITI</option>
              <option <? if($row['country']=='HM') echo 'selected';?> value="HM">HEARD   ISLAND AND MCDONALD ISLANDS</option>
              <option <? if($row['country']=='VA') echo 'selected';?> value="VA">HOLY SEE (VATICAN CITY   STATE)</option>
              <option <? if($row['country']=='HN') echo 'selected';?> value="HN">HONDURAS</option>
              <option <? if($row['country']=='HK') echo 'selected';?> value="HK">HONG   KONG</option>
              <option <? if($row['country']=='HU') echo 'selected';?> value="HU">HUNGARY</option>
              <option <? if($row['country']=='IS') echo 'selected';?> value="IS">ICELAND</option>
              <option <? if($row['country']=='IN') echo 'selected';?> value="IN">INDIA</option>
              <option <? if($row['country']=='ID') echo 'selected';?> value="ID">INDONESIA</option>
              <option <? if($row['country']=='IR') echo 'selected';?> value="IR">IRAN</option>
              <option <? if($row['country']=='IQ') echo 'selected';?> value="IQ">IRAQ</option>
              <option <? if($row['country']=='IE') echo 'selected';?> value="IE">IRELAND</option>
              <option <? if($row['country']=='IL') echo 'selected';?> value="IL">ISRAEL</option>
              <option <? if($row['country']=='IT') echo 'selected';?> value="IT">ITALY</option>
              <option <? if($row['country']=='JM') echo 'selected';?> value="JM">JAMAICA</option>
              <option <? if($row['country']=='JP') echo 'selected';?> value="JP">JAPAN</option>
              <option <? if($row['country']=='JO') echo 'selected';?> value="JO">JORDAN</option>
              <option <? if($row['country']=='KZ') echo 'selected';?> value="KZ">KAZAKSTAN</option>
              <option <? if($row['country']=='KE') echo 'selected';?> value="KE">KENYA</option>
              <option <? if($row['country']=='KI') echo 'selected';?> value="KI">KIRIBATI</option>
              <option <? if($row['country']=='KW') echo 'selected';?> value="KW">KUWAIT</option>
              <option <? if($row['country']=='KG') echo 'selected';?> value="KG">KYRGYSTAN</option>
              <option <? if($row['country']=='LA') echo 'selected';?> value="LA">LAO</option>
              <option <? if($row['country']=='LV') echo 'selected';?> value="LV">LATVIA</option>
              <option <? if($row['country']=='LB') echo 'selected';?> value="LB">LEBANON</option>
              <option <? if($row['country']=='LS') echo 'selected';?> value="LS">LESOTHO</option>
              <option <? if($row['country']=='LR') echo 'selected';?> value="LR">LIBERIA</option>
              <option <? if($row['country']=='LY') echo 'selected';?> value="LY">LIBYAN ARAB JAMAHIRIYA</option>
              <option <? if($row['country']=='LI') echo 'selected';?> value="LI">LIECHTENSTEIN</option>
              <option <? if($row['country']=='LT') echo 'selected';?> value="LT">LITHUANIA</option>
              <option <? if($row['country']=='LU') echo 'selected';?> value="LU">LUXEMBOURG</option>
              <option <? if($row['country']=='MO') echo 'selected';?> value="MO">MACAU</option>
              <option <? if($row['country']=='MK') echo 'selected';?> value="MK">MACEDONIA (FYR)</option>
              <option <? if($row['country']=='MG') echo 'selected';?> value="MG">MADAGASCAR</option>
              <option <? if($row['country']=='MW') echo 'selected';?> value="MW">MALAWI</option>
              <option <? if($row['country']=='MY') echo 'selected';?> value="MY">MALAYSIA</option>
              <option <? if($row['country']=='MV') echo 'selected';?> value="MV">MALDIVES</option>
              <option <? if($row['country']=='ML') echo 'selected';?> value="ML">MALI</option>
              <option <? if($row['country']=='MT') echo 'selected';?> value="MT">MALTA</option>
              <option <? if($row['country']=='MH') echo 'selected';?> value="MH">MARSHALL ISLANDS</option>
              <option <? if($row['country']=='MQ') echo 'selected';?> value="MQ">MARTINIQUE</option>
              <option <? if($row['country']=='MR') echo 'selected';?> value="MR">MAURITANIA</option>
              <option <? if($row['country']=='MU') echo 'selected';?> value="MU">MAURITIUS</option>
              <option <? if($row['country']=='YT') echo 'selected';?> value="YT">MAYOTTE</option>
              <option <? if($row['country']=='MX') echo 'selected';?> value="MX">MEXICO</option>
              <option <? if($row['country']=='FM') echo 'selected';?> value="FM">MICRONESIA</option>
              <option <? if($row['country']=='MD') echo 'selected';?> value="MD">MOLDOVA</option>
              <option <? if($row['country']=='MC') echo 'selected';?> value="MC">MONACO</option>
              <option <? if($row['country']=='MN') echo 'selected';?> value="MN">MONGOLIA</option>
              <option <? if($row['country']=='MS') echo 'selected';?> value="MS">MONTSERRAT</option>
              <option <? if($row['country']=='MA') echo 'selected';?> value="MA">MOROCCO</option>
              <option <? if($row['country']=='MZ') echo 'selected';?> value="MZ">MOZAMBIQUE</option>
              <option <? if($row['country']=='MM') echo 'selected';?> value="MM">MYANMAR</option>
              <option <? if($row['country']=='NA') echo 'selected';?> value="NA">NAMIBIA</option>
              <option <? if($row['country']=='NR') echo 'selected';?> value="NR">NAURU</option>
              <option <? if($row['country']=='NP') echo 'selected';?> value="NP">NEPAL</option>
              <option <? if($row['country']=='NL') echo 'selected';?> value="NL">NETHERLANDS</option>
              <option <? if($row['country']=='AN') echo 'selected';?> value="AN">NETHERLANDS ANTILLES</option>
              <option <? if($row['country']=='NT') echo 'selected';?> value="NT">NEUTRAL ZONE</option>
              <option <? if($row['country']=='NC') echo 'selected';?> value="NC">NEW CALEDONIA</option>
              <option <? if($row['country']=='NZ') echo 'selected';?> value="NZ">NEW ZEALAND</option>
              <option <? if($row['country']=='NI') echo 'selected';?> value="NI">NICARAGUA</option>
              <option <? if($row['country']=='NE') echo 'selected';?> value="NE">NIGER</option>
              <option <? if($row['country']=='NG') echo 'selected';?> value="NG">NIGERIA</option>
              <option <? if($row['country']=='NU') echo 'selected';?> value="NU">NIUE</option>
              <option <? if($row['country']=='NF') echo 'selected';?> value="NF">NORFOLK ISLAND</option>
              <option <? if($row['country']=='KP') echo 'selected';?> value="KP">NORTH KOREA</option>
              <option <? if($row['country']=='MP') echo 'selected';?> value="MP">NORTHERN MARIANA ISLANDS</option>
              <option <? if($row['country']=='NO') echo 'selected';?> value="NO">NORWAY</option>
              <option <? if($row['country']=='OM') echo 'selected';?> value="OM">OMAN</option>
              <option <? if($row['country']=='PK') echo 'selected';?> value="PK">PAKISTAN</option>
              <option <? if($row['country']=='PW') echo 'selected';?> value="PW">PALAU</option>
              <option <? if($row['country']=='PS') echo 'selected';?> value="PS">PALESTINIAN TERRITORIES</option>
              <option <? if($row['country']=='PA') echo 'selected';?> value="PA">PANAMA</option>
              <option <? if($row['country']=='PG') echo 'selected';?> value="PG">PAPUA NEW GUINEA</option>
              <option <? if($row['country']=='PY') echo 'selected';?> value="PY">PARAGUAY</option>
              <option <? if($row['country']=='PE') echo 'selected';?> value="PE">PERU</option>
              <option <? if($row['country']=='PH') echo 'selected';?> value="PH">PHILIPPINES</option>
              <option <? if($row['country']=='PN') echo 'selected';?> value="PN">PITCAIRN</option>
              <option <? if($row['country']=='PL') echo 'selected';?> value="PL">POLAND</option>
              <option <? if($row['country']=='PT') echo 'selected';?> value="PT">PORTUGAL</option>
              <option <? if($row['country']=='PR') echo 'selected';?> value="PR">PUERTO RICO</option>
              <option <? if($row['country']=='QA') echo 'selected';?> value="QA">QATAR</option>
              <option <? if($row['country']=='RE') echo 'selected';?> value="RE">REUNION</option>
              <option <? if($row['country']=='RO') echo 'selected';?> value="RO">ROMANIA</option>
              <option <? if($row['country']=='RU') echo 'selected';?> value="RU">RUSSIAN FEDERATION</option>
              <option <? if($row['country']=='RW') echo 'selected';?> value="RW">RWANDA</option>
              <option <? if($row['country']=='SH') echo 'selected';?> value="SH">SAINT HELENA</option>
              <option <? if($row['country']=='KN') echo 'selected';?> value="KN">SAINT KITTS AND NEVIS</option>
              <option <? if($row['country']=='LC') echo 'selected';?> value="LC">SAINT LUCIA</option>
              <option <? if($row['country']=='PM') echo 'selected';?> value="PM">SAINT PIERRE AND MIQUELON</option>
              <option <? if($row['country']=='VC') echo 'selected';?> value="VC">SAINT   VINCENT AND THE GRENADINES</option>
              <option <? if($row['country']=='WS') echo 'selected';?> value="WS">SAMOA</option>
              <option <? if($row['country']=='SM') echo 'selected';?> value="SM">SAN MARINO</option>
              <option <? if($row['country']=='ST') echo 'selected';?> value="ST">SAO TOME AND PRINCIPE</option>
              <option <? if($row['country']=='SA') echo 'selected';?> value="SA">SAUDI ARABIA</option>
              <option <? if($row['country']=='SN') echo 'selected';?> value="SN">SENEGAL</option>
              <option <? if($row['country']=='SC') echo 'selected';?> value="SC">SEYCHELLES</option>
              <option <? if($row['country']=='SL') echo 'selected';?> value="SL">SIERRA LEONE</option>
              <option <? if($row['country']=='SG') echo 'selected';?> value="SG">SINGAPORE</option>
              <option <? if($row['country']=='SK') echo 'selected';?> value="SK">SLOVAKIA</option>
              <option <? if($row['country']=='SI') echo 'selected';?> value="SI">SLOVENIA</option>
              <option <? if($row['country']=='SB') echo 'selected';?> value="SB">SOLOMON ISLANDS</option>
              <option <? if($row['country']=='SO') echo 'selected';?> value="SO">SOMALIA</option>
              <option <? if($row['country']=='ZA') echo 'selected';?> value="ZA">SOUTH AFRICA</option>
              <option <? if($row['country']=='GS') echo 'selected';?> value="GS">SOUTH GEORGIA</option>
              <option <? if($row['country']=='KR') echo 'selected';?> value="KR">SOUTH KOREA</option>
              <option <? if($row['country']=='ES') echo 'selected';?> value="ES">SPAIN</option>
              <option <? if($row['country']=='LK') echo 'selected';?> value="LK">SRI LANKA</option>
              <option <? if($row['country']=='SD') echo 'selected';?> value="SD">SUDAN</option>
              <option <? if($row['country']=='SR') echo 'selected';?> value="SR">SURINAME</option>
              <option <? if($row['country']=='SJ') echo 'selected';?> value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
              <option <? if($row['country']=='SZ') echo 'selected';?> value="SZ">SWAZILAND</option>
              <option <? if($row['country']=='SE') echo 'selected';?> value="SE">SWEDEN</option>
              <option <? if($row['country']=='CH') echo 'selected';?> value="CH">SWITZERLAND</option>
              <option <? if($row['country']=='SY') echo 'selected';?> value="SY">SYRIA</option>
              <option <? if($row['country']=='TW') echo 'selected';?> value="TW">TAIWAN</option>
              <option <? if($row['country']=='TJ') echo 'selected';?> value="TJ">TAJIKISTAN</option>
              <option <? if($row['country']=='TZ') echo 'selected';?> value="TZ">TANZANIA</option>
              <option <? if($row['country']=='TH') echo 'selected';?> value="TH">THAILAND</option>
              <option <? if($row['country']=='TG') echo 'selected';?> value="TG">TOGO</option>
              <option <? if($row['country']=='TK') echo 'selected';?> value="TK">TOKELAU</option>
              <option <? if($row['country']=='TO') echo 'selected';?> value="TO">TONGA</option>
              <option <? if($row['country']=='TT') echo 'selected';?> value="TT">TRINIDAD AND TOBAGO</option>
              <option <? if($row['country']=='TN') echo 'selected';?> value="TN">TUNISIA</option>
              <option <? if($row['country']=='TR') echo 'selected';?> value="TR">TURKEY</option>
              <option <? if($row['country']=='TM') echo 'selected';?> value="TM">TURKMENISTAN</option>
              <option <? if($row['country']=='TC') echo 'selected';?> value="TC">TURKS AND CAICOS   ISLANDS</option>
              <option <? if($row['country']=='TV') echo 'selected';?> value="TV">TUVALU</option>
              <option <? if($row['country']=='UG') echo 'selected';?> value="UG">UGANDA</option>
              <option <? if($row['country']=='UA') echo 'selected';?> value="UA">UKRAINE</option>
              <option <? if($row['country']=='AE') echo 'selected';?> value="AE">UNITED ARAB EMIRATES</option>
              <option <? if($row['country']=='GB') echo 'selected';?> value="GB">UNITED KINGDOM</option>
              <option <? if($row['country']=='UM') echo 'selected';?> value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
              <option <? if($row['country']=='US') echo 'selected';?> value="US">UNITED STATES OF AMERICA</option>
              <option <? if($row['country']=='UY') echo 'selected';?> value="UY">URUGUAY</option>
              <option <? if($row['country']=='UZ') echo 'selected';?> value="UZ">UZBEKISTAN</option>
              <option <? if($row['country']=='VU') echo 'selected';?> value="VU">VANUATU</option>
              <option <? if($row['country']=='VE') echo 'selected';?> value="VE">VENEZUELA</option>
              <option <? if($row['country']=='VN') echo 'selected';?> value="VN">VIET NAM</option>
              <option <? if($row['country']=='VG') echo 'selected';?> value="VG">VIRGIN ISLANDS (BRITISH)</option>
              <option <? if($row['country']=='VI') echo 'selected';?> value="VI">VIRGIN ISLANDS   (U.S.)</option>
              <option <? if($row['country']=='WF') echo 'selected';?> value="WF">WALLIS AND FUTUNA ISLANDS</option>
              <option <? if($row['country']=='EH') echo 'selected';?> value="EH">WESTERN SAHARA</option>
              <option <? if($row['country']=='YE') echo 'selected';?> value="YE">YEMEN</option>
              <option <? if($row['country']=='YU') echo 'selected';?> value="YU">YUGOSLAVIA</option>
              <option <? if($row['country']=='ZR') echo 'selected';?> value="ZR">ZAIRE</option>
              <option <? if($row['country']=='ZM') echo 'selected';?> value="ZM">ZAMBIA</option>
              <option <? if($row['country']=='ZW') echo 'selected';?> value="ZW">ZIMBABWE</option>
          </select>          </td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td>Phone:</td>
          <td><input id="phone" size="15" name="phone" value="<? echo $row['phone'];?>"/></td>
        </tr>
        <tr>
          <td>Fax:</td>
          <td><input id="fax" size="15" name="fax" value="<? echo $row['fax'];?>"/></td>
        </tr>
        <tr bgcolor="#F7F7F7">
          <td>Email address:</td>
          <td><input id="email" size="30" name="email" value="<? echo $username;?>" disabled="disabled"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button2" id="button2" value="Update" />
          </label></td>
        </tr>
      </table>
    </form>
    
   <? } //end while?> 
    
    
    <br />
    <hr />


<p><br></p>
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
        &copy; Copyright 2009. TIIM Conference 2010.</td>
      </tr>
    </table></td>
    <td width="10" align="left" valign="top" background="../images/shadow_right_bg.png"><img src="../images/shadow_right.png" /></td>
  </tr>
</table>
</div>

<map name="Map" id="Map"><area shape="rect" coords="10,8,57,27" href="../index.html" />
</map></body>
<!-- InstanceEnd --></html>
