<html> 
<head> 
<title>ThaiCreate.Com PHP Sending Email</title> 
</head> 
<body> 
<? 
    
$strTo = "suthee@iself.biz"; 
    
$strSubject = "Test Send Email"; 
    
$strHeader = "From: suthee@iself.biz"; 
    
$strMessage = "My Body & My Description"; 
    
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);
    
if($flgSend) 
    
{ 
        
echo "Email Sending."; 
    
} 
    
else
    
{ 
        
echo "Email Can Not Send."; 
    
} 
?> 
</body> 
</html>