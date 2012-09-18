<?php
if(function_exists("fsockopen")) {
echo "Function Exists<br>";
} else {
echo "Not Function Exists<br>";
}

$fp = @fsockopen("ssl://smtp.gmail.com", 465, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    echo "OK";
}
?> 