<?php
echo 'Historie přístupů:<br>';

$handle = fopen("prispevky.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
}
$handle = fopen("prispevky.txt",  "r");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    echo fread($handle, 1000);
}
echo '<br><a href="navstevni-kniha.php">Navstevni kniha</a>';
fclose($handle);