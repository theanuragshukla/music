<?php
$file = fopen("art/artHi.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var artHi = "."$data";
fwrite($file,$txt);
fclose($file);
//header("Location: get.php");
echo 'done ';

?>