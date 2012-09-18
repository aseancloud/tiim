<?
require_once "../web_function.php";
require_once "../connect_db.php";
//============================UPDATE PAYMENT FROM BAY===========================
$day = date("Y-m-d H:i:s");
$q_update = "UPDATE tiim_payment_user SET AMOUNT='".$AMOUNT."',  REF1='".$REF1."',REF2='".$REF2."',REF3='".$REF3."',REF4='".$REF4."',RESPCODE ='".$RESPCODE."', AUTHCODE = '".$AUTHCODE."', STATUS='".$STATUS."', lastupdate = '".$day."' WHERE ORDERNUMBER='".$ORDERNUMBER."';";						
mysql_query($q_update);
//==============================================================================

if($RESPCODE=="00" && $STATUS=="COMPLETE"){
	//============================UPDATE USER==================================
	$q_user_update = "UPDATE tiim_user SET pay='Paid' WHERE email='".$REF1."';";
	mysql_query($q_user_update);
	//===========================UPDATE PAPER==================================
	$sql_paper = "SELECT * FROM tiim_paper WHERE register_name='".$REF1."';";
	$q_paper = mysql_query($sql_paper);
	$num_paper = @mysql_num_rows($q_paper);
	if($num_paper>0){	
		$sql_paper_update = "UPDATE tiim_paper SET payment='Paid' WHERE register_name='".$REF1."';";
		mysql_query($sql_paper_update);
	}
	//=========================================================================
}

?>
