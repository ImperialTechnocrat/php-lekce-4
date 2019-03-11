<?php
$handle = fopen('prispevky.txt,', 'a') or die("Unable to open file");
var_dump($_POST);
$entry = explode(';', $_POST);
echo $entry;
fwrite($handle, $_POST);