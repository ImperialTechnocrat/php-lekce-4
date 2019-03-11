<?php
$handle = fopen('prispevky.txt,', 'a') or die("Unable to open file");
var_dump($_POST);
$semicolonSeparation = implode(";", $_POST);
echo $semicolonSeparation;
fwrite($handle, $semicolonSeparation);
echo "Uspesne ulozeno";
echo '<br><a href="navstevni-kniha.php">Navstevni kniha</a>';
fclose($handle);