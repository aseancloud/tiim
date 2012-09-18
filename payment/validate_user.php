<? 
session_start();

//$cache_limiter = session_cache_limiter();
//echo "The cache limiter is now set to $cache_limiter<br />";
//echo session_id();

//  Copyright 2008-12 Mr.Sakul 0891485996 
// for only www.tiimconference.org

// Validate IP address, office-hour 
// Not implement
?>

<?
ob_start();

$username='';
$pwd='';

if(isset($_SESSION["email"])) $username = $_SESSION["email"];


//if(isset($_SESSION["my_password"])) $pwd = $_SESSION["my_password"];

if(isset($_REQUEST['email']))	$username = $_REQUEST['email'];
//if(isset($_REQUEST['my_password']))	$pwd = $_REQUEST['my_password'];


$_SESSION["my_username"] = $username;
if(isset($_SESSION["my_username"])) session_register("my_username");
//$_SESSION["my_password"] = $pwd;

ob_end_flush();


require_once "../connect_db.php";

if( $username!='') {

	$query = " SELECT * FROM tiim_user WHERE email='$username'";
	$result = mysql_query($query);
	$num = mysql_num_rows($result); 
	
	$query_co = " SELECT * FROM tiim_co_author WHERE email='$username'";
	$result_co = mysql_query($query_co);
	$num_co = mysql_num_rows($result_co);  
	 
	if($num==0 && $num_co==0) {		
		echo 'Your email does not exist to registration. Please register this email in order to use this email for payment process. Then back to Payment Page again.';
		//echo '<p><br><input type="submit" value="GO Register" onclick="location.href(\'../registration.html\')" /></p>';
		// Unset all of the session variables.
		session_unset();
		// Finally, destroy the session.
		session_destroy();
		die('<br><br><a herf="../registration.html" onclick="location.href(\'../registration.html\')"><input type="submit" value="Go Register" /></a>');
	}

} 
else {
	echo "<html><body> Permission Denied <p> <a href='../payment.html' target='_parent'>Please Login</a> </p>";
	die();
}

?>
