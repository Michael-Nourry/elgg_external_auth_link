<?php
$data=$_POST['data'];
$token = sha1($data.time());
echo $token;
?>