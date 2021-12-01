<?php
$file = fopen("src/english128.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var songsEn128 = "."$data";
fwrite($file,$txt);
fclose($file);
header("Location: getArtEng.php");
echo 'done ';

?>