<?php
$handle = fopen('prispevky.txt,', 'a') or die("Unable to open file");

fwrite($handle, $_POST);