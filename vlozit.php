<?php
$handle = fopen('prispevky.txt,', 'a') or die("Unable to open file");
echo $_POST;
fwrite($handle, $_POST);