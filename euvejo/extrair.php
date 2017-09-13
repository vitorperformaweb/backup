<?php
$zip = new ZipArchive;
if ($zip->open("1004.zip")){
$path = getcwd() . "/loja/";
$path = str_replace("\\","/",$path);
echo $path;
echo $zip->extractTo($path);
$zip->close();
echo 'Done.';
} else {
echo "Error";
}
?>