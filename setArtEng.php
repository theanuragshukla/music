<?php
$file = fopen("art/artEng.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var artEng = "."$data";
fwrite($file,$txt);
fclose($file);
header("Location: getHi44.php");
echo 'done ';

?>