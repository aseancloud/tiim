<?
require_once "validate_user.php";

$chk = $_POST['checkbox'];
$payment_chk = $_POST['payment'];
$status2 = $_POST['status2'];
$num_id = $_POST['num_id'];
$numchk = $_POST['numchk2'];
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
</head>

<body onload="MM_preloadImages('../images/btn_search_h.png')">
<div id="container">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0" class="h" bgcolor="#FFFFFF">
  <tr>
    <td width="10" align="left" valign="top" background="../images/shadow_left_bg.png"><img src="../images/shadow_left.png" /></td>
    <td width="746" align="left" valign="top" class="h"><table width="746" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    	<td bgcolor="#666666"><img src="../images/header_admin.jpg" width="950" /></td>
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
<?
require_once "../connect_db.php";
require_once "../web_function.php";

/*
     
$sql = " UPDATE tiim_paper SET status='".$_POST['status']."' , payment='".$_POST['payment']."' WHERE register_name='".$_POST['register_name']."' AND date='".$_POST['date']."' ";

$result = mysql_query($sql) or die(mysql_error());

echo '<p>Already update document status and payment.</p>';

sendMail_paper_status(trim($_POST["register_name"]), trim($_POST["project"]), trim($_POST["institution"]), trim($_POST["date"]), trim($_POST["abstract"]), trim($_POST["full_paper"]), trim($_POST["status"]), trim($_POST["payment"])) or die("ERROR Can not sent email.");

*/
if($abs==1){
$sql = " UPDATE tiim_abstract_paper SET status='".$_POST['status']."' WHERE id='".$id."' AND ref_id='".$ref_id."' ";

$result = mysql_query($sql) or die(mysql_error());

echo '<p>Already update document status.</p>';
}
if($full==1){
$sql = " UPDATE tiim_full_paper SET status='".$_POST['status']."' WHERE id='".$id."' AND ref_id='".$ref_id."' ";

$result = mysql_query($sql) or die(mysql_error());

echo '<p>Already update document status.</p>';


}

if($pay==1){
$sql = " UPDATE tiim_paper SET payment='".$_POST['payment']."' WHERE register_name='$email'";
$result = mysql_query($sql) or die(mysql_error());
$sql = " UPDATE tiim_payment SET status='".$_POST['payment']."' WHERE register_name='$email'";
$result = mysql_query($sql) or die(mysql_error()); 

$sql = " UPDATE tiim_user SET pay='".$_POST['payment']."' WHERE email='$email'";
$result = mysql_query($sql) or die(mysql_error()); 
//-------การ update การจ่ายเงิน   08/03/53  เก็บชื่อ ADMIN ที่เข้ามาแก้ไข
	//----------------------------------24/12/52 
					 //------------ส่วนของชื่อ
                    $sql_update5= " SELECT first_name FROM tiim_admin WHERE email  ='$username'";
				    $result_update5 = @mysql_query($sql_update5) or die(mysql_error());
		        	$row_update5=mysql_fetch_array($result_update5);	
		
						 //------------ส่วนของ id      
            $sql_update8= "SELECT id FROM tiim_paper WHERE id= '$id_update'";
		    $result_update8 = @mysql_query($sql_update8) or die(mysql_error());
			$row_update8=mysql_fetch_array($result_update8); 
			
			//-----------------------------------------------
			
				$ref3 = $row_update8['id'];
				$user_update5=$row_update5['first_name'];
				$date_update5 =date ("Y-m-d H:i:s"); 
			//	echo 'kalamaer'.$id_update ;
			//	$option_payment = $payment_chk;
	
				//$email_update=$row_update8['register_name'];
				//echo $payment_chk;

 				//for($i=0;$i<$payment_chk;$i++){						
					if($payment_chk){
							$sql_insert5 = "INSERT INTO tiim_update_paper (ref_id,user_update,action_update,date_update) 
 VALUES ('$ref3','$user_update5','update_pay($payment_chk)','$date_update5') ";	
 						
							$sql_insert6 = mysql_query($sql_insert5) or die(mysql_error()); 	
					}												
					//}
 
					//------------------------------24/12/52




// ----------------  จบ

//sendMail_payment(trim($email),trim($payment));
if($checkbox<>""){
$date=date ("Y-m-d H:i:s"); 
 $sql2 = "INSERT INTO tiim_payment (register_name,method,date,status) 
 VALUES ('$email',2,'$date','Paid') ";
 $result2 = mysql_query($sql2) or die(mysql_error()); 

}
echo '<p>Already update payment status.</p>';

}

if($abstractt){ 
for($i=0;$i<$numchk;$i++)
{    
				if($abstractt[$i]){			
 					 $sql = " UPDATE tiim_abstract_paper SET status='$status[$i]' where ref_id='$ref[$i]'  
					 and id='$ida[$i]' ";
          			$result = mysql_query($sql) or die(mysql_error());					
					sendMail_changeabstract(trim($email[$i]),trim($status[$i]),trim($abstractname[$i]));		
				}			
						
	/* if($checkbox[$i]<>"")
	{  
	$sql = " UPDATE tiim_abstract_paper SET status='$status[$i]' WHERE id='$checkbox[$i]'  ";		
	$result = mysql_query($sql) or die(mysql_error());
	} */
}

echo '<p>Already update  Abstract document status.</p>';
}

 if($abstractall){	  
for($i=0;$i<$numchk;$i++)
{  
	if($checkbox[$i]<>"")
	{ 
	 $sql = " UPDATE tiim_abstract_paper SET status='$select1' WHERE id='$checkbox[$i]'  ";
          		$result = mysql_query($sql) or die(mysql_error());					
				//echo $abstractname[$i]." ".$email[$i]."<br>";				
			sendMail_changeabstract(trim($email[$i]),trim($select1),trim($abstractname[$i]));	
			
			}
 }
echo '<p>Already update  Abstract document status.</p>';
}

if($fullpaper){;
for($i=0;$i<$numchk2;$i++)
{    
			if($fullpaper[$i]){			
 					 $sql = " UPDATE tiim_full_paper SET status='$status2[$i]' where ref_id='$ref2[$i]'  
					 and id='$ida2[$i]' ";
          			$result = mysql_query($sql) or die(mysql_error());
					//----------------------------------24/12/52 
					 //------------ส่วนของชื่อ
                  $sql_update= " SELECT first_name FROM tiim_admin WHERE email  ='$username'";
				   $result_update = @mysql_query($sql_update) or die(mysql_error());
			$row_update=mysql_fetch_array($result_update);	
			//---------------------ส่วนของ ref_id รหัส paper
			//  $sql_update1= " SELECT ref_id FROM tiim_full_paper ,tiim_update_paper WHERE tiim_full_paper.ref_id=tiim_update_paper.ref_id";
	   $sql_update1= " SELECT tiim_update_paper.ref_id,tiim_full_paper.ref_id FROM tiim_update_paper,tiim_full_paper WHERE tiim_update_paper.ref_id=tiim_full_paper.ref_id";
		    $result_update1= @mysql_query($sql_update1) or die(mysql_error());
			$row_update1=mysql_fetch_array($result_update1);	
					//-------------------------------------
				$ref2 = $row_update1['ref_id'];
				$user_update=$row_update['first_name'];
				$date_update =date ("Y-m-d H:i:s"); 
				
				//echo 'rrrrrrrrrrrrrrrrr'.$num_id;
				 
 					for($i=0;$i<$numchk;$i++){						
						if($chk[$i]){
							$sql_insert2 = "INSERT INTO tiim_update_paper (ref_id,user_update,action_update,date_update) 
 VALUES ('".$chk[$i]."','$user_update','update_full (".$status2[$i].")','$date_update') ";	
 						
							$sql_insert1 = mysql_query($sql_insert2) or die(mysql_error()); 	
						}												
					}
 
					//------------------------------24/12/52
					sendMail_changeabstract(trim($email[$i]),trim($status2[$i]),trim($fullname[$i]));	
				
									}
			
}
echo '<p>Already update Full Paper document status.</p>';

}

 if($fullpaperall){	
for($i=0;$i<$numchk2;$i++)
{
	if($checkbox[$i]<>"")
	{  
	 $sql = " UPDATE tiim_full_paper SET status='$select2' WHERE id='$checkbox[$i]'  ";
          			$result = mysql_query($sql) or die(mysql_error());
		sendMail_changeabstract(trim($email[$i]),trim($select2),trim($fullname[$i]));
}
}
 
echo '<p>Already update  Full Paper document status.</p>';
}



echo '<p>Already send email to user.</p>';


echo '<p><br><a herf="main.php"><input type="submit" value="Go Back" onclick="window.history.go(-1)"/></a></p>';

//---------------
/*$ref_id
 $sql_update= "INSERT INTO tiim_update_user (id,ref_id,user_update,action_update,date_update) 
 VALUES ('$id',$ref_id,'$user_update','$action_update','$date_update') ";
  $sql_update1 = mysql_query( $sql_update) or die(mysql_error()); 
*/

//----------------
?>
          </div>
            
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
