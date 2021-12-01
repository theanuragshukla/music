<?php
$file = fopen("src/hindi128.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var songsHi128 = "."$data";
fwrite($file,$txt);
fclose($file);
header("Location: getArtHi.php");
echo 'done ';

?>