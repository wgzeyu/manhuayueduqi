<?php
$filename = "updatecheck.txt";
$file = fopen($filename, "r") or die("打开文件失败!");
echo fread($file,filesize($filename));
fclose($file);
?>