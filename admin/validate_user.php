<? session_cache_limiter('nocache');session_start();

//$cache_limiter = session_cache_limiter();
//echo "The cache limiter is now set to $cache_limiter<br />";
//echo session_id();

// © Copyright 2008-12 Mr.Sakul 0891485996 
// for only www.tiimconference.org

// Validate IP address, office-hour 
// Not implement
?>

<?
ob_start();

$username='';
$pwd='';

if(isset($_SESSION["my_username"])) $username = $_SESSION["my_username"];
if(isset($_SESSION["my_password"])) $pwd = $_SESSION["my_password"];

if(isset($_REQUEST['my_username']))	$username = $_REQUEST['my_username'];
if(isset($_REQUEST['my_password']))	$pwd = $_REQUEST['my_password'];

$_SESSION["my_username"] = $username;
$_SESSION["my_password"] = $pwd;

ob_end_flush();

require_once "../connect_db.php";

if( $username!='' && $pwd!='' ) {

	$query = " SELECT * FROM tiim_admin WHERE email='$username' AND pwd='".$pwd."' ";
	$result = mysql_query($query);
	$num = mysql_num_rows($result);  
	if($num==0) {
		echo "<html><body> Permission Denied <p> Invalid Username or Password ! </p>
		<p><a href='.' target='_parent'>Please Login</a> </p>";
		die();
	}

} 
else {
	echo "<html><body> Permission Denied <p> <a href='.' target='_parent'>Please Login</a> </p>";
	die();
}

?>
