<?php
$file = fopen("src/english44.js", "w") or die("Unable to open file!");
$data=$_POST['data'];
$txt="var songsEn44 = "."$data";
fwrite($file,$txt);
fclose($file);
header("Location: getEng128.php");
echo 'done ';

?>