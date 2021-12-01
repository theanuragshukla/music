<?php
$file = fopen("src/hindi44.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var songsHi44 = "."$data";
fwrite($file,$txt);
fclose($file);
header("Location: getHi128.php");
echo 'done ';

?>