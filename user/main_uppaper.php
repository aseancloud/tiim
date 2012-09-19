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
      <td>Presenter</td>
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
		  <th width="24%"  align="center" bgcolor="#DEDBDE">Institution</th>
          <th width="24%"  align="center" bgcolor="#DEDBDE">Country</th>
          <th width="23%"  align="center" bgcolor="#DEDBDE">Email</th>
        <!--  <th width="14%"  align="center" bgcolor="#DEDBDE">Telphone</th> -->
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
		   <td><input type="text" id="Institution_co1" name="Institution_co[]" size="16" maxlength="80" class="text"/></td>
          <td><input type="text" id="Country_co1" name="Country_co[]" size="16" maxlength="80" class="text"/></td>
          <td><input type="text" id="email1" name="email[]" size="15" maxlength="80" class="text"/></td>
        <!--  <td><input type="text" id="Telephone1" name="Telephone[]" size="10" maxlength="80" class="text"/></td> -->
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
    <!--  <td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td> -->
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
        <td><input type="submit" name="abstract" id="button3" value="Upload" onclick="return confirm('Are you confirm your information?')" /></td>
      </tr>
    </table>
  </form>
  <br />
  <hr />
  
  <table width="100%" cellspacing="0">
    <tr>
      <td align="left" class="h2"><span class="style1">Add Your Full Papers</span></td>
    <!--  <td align="right" class="h2"><b><a href="logout.php">Logout</a></b></td> -->
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
        <td><input type="submit" name="fullpaper" id="button32" value="Upload" onclick="return confirm('Are you confirm your information?')" /></td>
      </tr>
    </table>
  </form>
  
  <p align="right" >
     <input type="submit" name="back" value="  Back  " onclick="self.location.href=('main.php')"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <!--==============================================================-->
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
