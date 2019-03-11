<?php
$semicolonSeparation = implode(";", $_POST);
$handle = fopen("prispevky.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, $semicolonSeparation . "<br>\n");
    echo "Uspesne ulozeno";
}
echo '<br><a href="navstevni-kniha.php">Navstevni kniha</a>';
fclose($handle);