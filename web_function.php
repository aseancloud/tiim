<?

function createPassword($var){
	return abs(crc32($var)%1000000);
	//time();
}

function makeCksum() { 
       $str = ""; 
       for ($i=0;$i<32;++$i) 
               $str .= chr(rand(32,126)); 
       //$_SESSION['Cksum'] = $str; 
	   return $str;
} 

function encode($x,$cks) { 
    return base64_encode(substr($cks,rand(0,28),4) . $x); 
} 

function decode($x,$cks) { 
    $y = base64_decode($x); 
    if (strpos($cks,substr($y,0,4)) === false) return false; 
    return substr($y,4-strlen($y)); 
} 

	//-------------------------------------------------------------------
function sendMail_payment($to,$status){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Your document has been change status by Admin.</title>
		</head>
		<body>
		  <img src="images/header1.jpg"></img>		 
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>			
			<tr>
			  <td></td>
			</tr>
		  </table>
		  	  <p><strong>Status:</strong>'.$status.'</p>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Your payment status has been change by Admin.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	//$mail->AddAddress($to,$fname." ".$lname);
	$mail->AddAddress($to);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	
}

//-------------------------------------------------------------------
function sendMail_system1($to,$from,$subject,$message){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>'.$subject.'</title>
		</head>
		<body>
		  <img src="images/header1.jpg"></img>		 
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td>'.$message.'</td>
			</tr>
			<tr>
			  <td></td>
			</tr>
		  </table>		  	 
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "$from";
	$mail->FromName   = "$from";
	
	$mail->Subject    = "$subject";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	//$mail->AddAddress($to,$fname." ".$lname);
	$mail->AddAddress($to);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	
}


	//-------------------------------------------------------------------
function sendMail_changeabstract($to,$status,$abstractname){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Your document has been change status by Admin.</title>
		</head>
		<body>
		  <img src="images/header1.jpg"></img>		 
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td><strong>Your Paper:</strong></td><td>'.$abstractname.'</td>
			</tr>
			<tr>
			  <td></td>
			</tr>
		  </table>
		  	  <p><strong>Status:</strong>'.$status.'</p>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Your document status has been change by Admin.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	//$mail->AddAddress($to,$fname." ".$lname);
	$mail->AddAddress($to);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	
}


//================================================================

function sendMail_registered($to,$password,$fname,$lname){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Successfully Registration.</title>
		</head>
		<body>
		  <img src="images/header1.jpg"></img>
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td><strong>username:</strong></td><td>'.$to.'</td>
			</tr>
			<tr>
			  <td></td>
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
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Successfully Registration.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	$mail->AddAddress($to,$fname." ".$lname);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	//===================================================
	$today = date("F j, Y, g:i a");
	
	$mail2             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Successfully Registration.</title>
		</head>
		<body>
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td><strong>username: </strong></td><td>'.$to.' have been registered to conference.</td>
			</tr>
			<tr>
			  <td><strong>Date:</strong></td><td>'.$today.'</td>
			</tr>
		  </table>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail2->IsSMTP();
	$mail2->SMTPAuth   = true;                  // enable SMTP authentication
	$mail2->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail2->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail2->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail2->Username   = "admin@tiimconference.org";  // GMAIL username
	$mail2->Password   = "9997771";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail2->AddReplyTo("admin@tiimconference.org","Admin");
	
	//$mail->From       = "name@yourdomain.com";
	$mail2->From       = $to;
	$mail2->FromName   = $to;
	
	$mail2->Subject    = "Registration Information.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail2->WordWrap   = 50; // set word wrap
	
	$mail2->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	$mail2->AddAddress("info@tiimconference.org", "info");
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail2->IsHTML(true); // send as HTML
		
	if(!$mail2->Send()) {
	  echo "Mailer Error: " . $mail2->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}
	return 1;
	//return 1;
}
//================================================================

function sendMail_forgot_password($to,$password){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Your paper status.</title>
		</head>
		<body>		  
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td><strong>username:</strong></td><td>'.$to.'</td>
			</tr>
			<tr>
			  <td></td>
			</tr>
		  </table>
	  <p>You can upload and check status your papers by <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">http://www.tiimconference.org/user</a></p>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Your paper status.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	$mail->AddAddress($to,$fname." ".$lname);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	return 1;
}
//================================================================

function sendMail_admin_forgot_password($to,$password){
	// subject
	$subject = 'Your admin password.';
	
	// message
	$message = '
	<html>
	<head>
	  <title>Your admin password..</title>
	</head>
	<body>
	  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a>, please remember your username and password</p>
	  <table>
		<tr>
		  <td><strong>username:</strong></td><td>'.$to.'</td>
		</tr>
		<tr>
		  <td><strong>password:</strong></td><td>'.$password.'</td>
		</tr>
	  </table>
	  <p>You can upload your papers by <a href="http://www.tiimconference.org/admin" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/admin" target="_blank">http://www.tiimconference.org/admin</a></p>
	</body>
	</html>
	';
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	$headers .= 'To: <'.$to.'>' . "\r\n";
	$headers .= 'From: <admin@www.tiimconference.org>' . "\r\n";
	
	// Mail it
	mail($to, $subject, $message, $headers) or die("ERROR: Can not sent e-mail.");
	return 1;
}
//================================================================

function sendMail_system($to,$from,$subject,$message){

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	$headers .= 'To: <'.$to.'>' . "\r\n";
	$headers .= 'From: <'.$from.'>' . "\r\n";
	
	// Mail it
	mail($to, $subject, $message, $headers) or die("ERROR: Can not sent e-mail.");
	return 1;
}
//================================================================

function sendMail_paper_upload($to,$project,$institution,$date,$abstract,$full_paper,$status,$payment,$password ){	
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$document='';
	if ($abstract !='')	$document = '&nbsp;<a href="http://www.tiimconference.org/user/uploads/'.$to.'/abstract/'.$abstract.'" target="_blank">Abstract</a>&nbsp;';
		
	if ($full_paper !='')	$document .= '&nbsp;<a href="http://www.tiimconference.org/user/uploads/'.$to.'/fullpaper/'.$full_paper.'" target="_blank">Full Paper</a>';
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Your paper status.</title>
		</head>
		<body>		  
		  <br>
		    <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a>, We received your document.</p>
		  <table>
			<tr>
			  <td><strong>Document:</strong></td><td>Project: '.$project.'<br>Institution: '.$institution.'<br>Uploaded Date: '.$date.'<br>Document: '.$document.'</td>
			</tr>
			<tr>
			  <td><strong>Document Status:</strong></td><td>'.$status.'</td>
			</tr>
		  </table>
	  <p>You can upload and check status your papers by <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/user/main.php?ticket_id='.base64_encode(base64_encode($to.$password).base64_encode($to.$password)).'&my_username='.$to.'&password='.base64_encode(base64_encode($password).base64_encode($to.$password)).'&username='.base64_encode(base64_encode($to).base64_encode($to.$password)).'&my_password='.$password.'" target="_blank">http://www.tiimconference.org/user</a></p>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Your uploaded document received.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	$mail->AddAddress($to,$fname." ".$lname);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	return 1;
	
}
//================================================================

function sendMail_paper_status($to,$project,$institution,$date,$abstract,$full_paper,$status,$payment ){
	// subject
	$subject = 'Your uploaded document status.';
	
	$document='';
	if ($abstract !='')	$document = '&nbsp;<a href="http://www.tiimconference.org/user/uploads/'.$to.'/abstract/'.$abstract.'" target="_blank">Abstract</a>&nbsp;';
		
	if ($full_paper !='')	$document .= '&nbsp;<a href="http://www.tiimconference.org/user/uploads/'.$to.'/fullpaper/'.$full_paper.'" target="_blank">Full Paper</a>';
	
	
	// message
	$message = '
	<html>
	<head>
	  <title>Your uploaded document status.</title>
	</head>
	<body>
	  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a>, your document status and payment.</p>
	  <table border=1>
		<tr>
		  <td><strong>Document:</strong></td><td>Project: '.$project.'<br>Institution: '.$institution.'<br>Uploaded Date: '.$date.'<br>Document: '.$document.'</td>
		</tr>
		<tr>
		  <td><strong>Document Status:</strong></td><td>'.$status.'</td>
		</tr>
		<tr>
		  <td><strong>Payment:</strong></td><td>'.$payment.'</td>
		</tr>		
	  </table>
	  <p>You can upload your papers by <a href="http://www.tiimconference.org/user" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/user" target="_blank">http://www.tiimconference.org/user</a></p>
	</body>
	</html>
	';
	
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	$headers .= 'To: <'.$to.'>' . "\r\n";
	$headers .= 'From: <admin@www.tiimconference.org>' . "\r\n";
	
	// Mail it
	mail($to, $subject, $message, $headers) or die("ERROR: Can not sent e-mail.");
	return 1;
}
//================================================================

function sendMail_co_author($to,$fname,$lname){
	//error_reporting(E_ALL);
	error_reporting(E_STRICT);
	
	date_default_timezone_set('America/Toronto');
	
	include("phpMailer/class.phpmailer.php");
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$to = "test@test.com";
	//$password = "123456";
	
	//$body             = $mail->getFile('contents.html');
	$body             = '
		<html>
		<head>
		  <title>Co-author paper status.</title>
		</head>
		<body>		  
		  <br>
		  <p>Welcome to <a href="http://www.tiimconference.org" target="_blank">www.tiimconference.org</a></p>
		  <table>
			<tr>
			  <td><strong>co-author:</strong></td><td>'.$to.'</td>
			</tr>
			<tr>
			  <td></td>
			</tr>
		  </table>
	  <p>You can check status your co-author papers by <a href="http://www.tiimconference.org/user/main_co.php?author='.$to.'" target="_blank">click here</a>
	  <br>or visit <a href="http://www.tiimconference.org/user/main_co.php?author='.$to.'" target="_blank">http://www.tiimconference.org/user</a></p>
		</body>
		</html>
		';
	$body             = eregi_replace("[\]",'',$body);
	
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	//$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Host       = "74.125.45.109";      // sets GMAIL as the SMTP server	
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	
	//$mail->Username   = "yourusername@gmail.com";  // GMAIL username
	//$mail->Password   = "yourpassword";            // GMAIL password
	
	$mail->Username   = "info@tiimconference.org";  // GMAIL username
	$mail->Password   = "tiiminfo";            // GMAIL password
	
	//$mail->AddReplyTo("yourusername@gmail.com","First Last");
	$mail->AddReplyTo("info@tiimconference.org","Infomation");
	
	//$mail->From       = "name@yourdomain.com";
	$mail->From       = "info@tiimconference.org";
	$mail->FromName   = "info@tiimconference.org";
	
	$mail->Subject    = "Co-author paper status.";
	
	//$mail->Body       = "Hi,<br>This is the HTML BODY<br>";                      //HTML Body
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 50; // set word wrap
	
	$mail->MsgHTML($body);
	
	//$mail->AddAddress("whoto@otherdomain.com", "John Doe");
	//$mail->AddAddress("suthee@iself.biz", "Suthee Jia");
	$mail->AddAddress($to,$fname." ".$lname);
	//$mail->AddAddress("chanus@iself.biz", "Chanus");
	
	//$mail->AddAttachment("images/phpmailer.gif");             // attachment
	//$mail->AddAttachment("images/tiim_logo.png");             // attachment
	
	$mail->IsHTML(true); // send as HTML
	
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //echo "Message sent!";
	}	
	return 1;
}
//================================================================

?>