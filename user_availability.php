<?php
require_once "connect_db.php";


	$user_name=$_POST['user_name'];
	$sql ="select * from tiim_user  where   email='$user_name'";
		$result = mysql_query($sql)or die ("cannot select");
		$numrow = mysql_num_rows($result);
		if($numrow>0){
		echo "no";
		}
		else {
		echo "yes";
		}
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

//this varible contains the array of existing users
/* $existing_users=array('roshan','mike','jason'); 
//value got from the get metho
$user_name=$_POST['user_name'];
//checking weather user exists or not in $existing_users array
if (in_array($user_name, $existing_users))
{
	//user name is not availble
	echo "no";
} 
else
{
	//user name is available
	echo "yes";
} */
?>