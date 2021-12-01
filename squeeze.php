<?php
require_once 'JSqueeze.php';
use Patchwork\JSqueeze;

$jz = new JSqueeze();

$fatJs = file_get_contents('dataeng.js');

$minifiedJs = $jz->squeeze(
    $fatJs,
    true,   // $singleLine
    true,   // $keepImportantComments
    false   // $specialVarRx
);

$file = fopen("./dataeng.min.js", "w") or die("Unable to open file!");
$data=$minifiedJs;
$txt="$data";
fwrite($file,$txt);
fclose($file);
echo "done";
?>