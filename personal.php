<body bgcolor=#ffffdd>
<? include ("webFunction.inc"); ?> 

<?
$host = "127.0.0.1:3306";
$db   = "test";
$user = "root";
$pass = "";
$pwd =  createPassword(30);
$c = mysql_connect($host,$user,$pass);
$result = mysql_db_query($db,"select * from tiim_personal order by first_name,last_name");
echo"<table border=1>";
echo"<tr><td>.</td><td>status</td><td>firstName</td><td>lastName</td><td>title</td><td>institution</td><td>address</td><td>city</td><td>postalCode</td><td>stateProvince</td><td>country</td><td>phone</td><td>fax</td><td>email</td><td>.</td></tr>";
while($row = mysql_fetch_array($result)) {
	$i=0; 
	echo"<tr>";
	while(isset($row[$i])){
		echo"<td>". $row[$i++] ."</td>";
		//echo $row[$i++];
	} 
	echo"</tr>";
	echo"<br>";
}
echo"</table>";
mysql_close($c);
?>

