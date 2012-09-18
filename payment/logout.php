<?
session_start();
// Unset all of the session variables.
session_unset();
// Finally, destroy the session.
session_destroy();


$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = '.';
//header("Location: http://$host$uri/$extra");
header("Location: http://$host/");
exit;
?>
