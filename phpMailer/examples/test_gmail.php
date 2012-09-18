<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

include("../class.phpmailer.php");
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$to = "test@test.com";
$password = "123456";

//$body             = $mail->getFile('contents.html');
$body             = '
	<html>
	<head>
	  <title>Successfully Registration.</title>
	</head>
	<body>
	  <img src="images/header1.jpg"></img>
	  <br>
	  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a>, please remember your username and password</p>
	  <table>
		<tr>
		  <td><strong>username:</strong></td><td>'.$to.'</td>
		</tr>
		<tr>
		  <td><strong>password:</strong></td><td>'.$password.'</td>
		</tr>
	  </table>
	  <p>You can upload your papers by <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">http://www.tiimconference.org/user</a></p>
	</body>
	</html>
	';
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server

//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
//$mail->Password   = "yourpassword";            // GMAIL password

$mail->Username   = "suthee386@gmail.com";  // GMAIL username
$mail->Password   = "386superman";            // GMAIL password

//$mail->AddReplyTo("yourusername@gmail.com","First Last");
$mail->AddReplyTo("suthee@iself.biz","Admin");

//$mail->From       = "name@yourdomain.com";
$mail->From       = "suthee@iself.biz";
$mail->FromName   = "suthee@iself.biz";

$mail->Subject    = "Successfully Registration.";

//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
//$mail->AddAddress("chanus@iself.biz", "Chanus");

//$mail->AddAttachment("images/phpmailer.gif");             // attachment
$mail->AddAttachment("images/tiim_logo.png");             // attachment

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>
