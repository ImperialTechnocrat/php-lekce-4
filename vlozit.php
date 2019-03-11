<?php
echo 'Historie přístupů:<br>';
$inputtedText = implode(" ", $_POST);
$handle = fopen("prispevky.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, $inputtedText . "<br>\n");
}
$handle = fopen("prispevky.txt",  "r");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    echo fread($handle, 1000);
}
echo '<br><a href="Navstevni-kniha.php">Navstevni kniha</a>';
fclose($handle);