<?php
$m = $_POST['email'];
$mobile=$_POST['mobile'];
$msg = "Email: " . $m . " <br>Mobile: " . $mobile;
$to=$m;
$sub="Clients Request";
$header = "From: srianandhavelmsubramanain@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\r\n";

$retraval=mail($to,$sub,$msg,$header);
if($retraval==true)
include('success.html');
else
echo "failed to sent mails";
?>