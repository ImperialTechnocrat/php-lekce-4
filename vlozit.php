<?php
$inputtedText = implode(": ", $_POST);
$handle = fopen("prispevky.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, $inputtedText . "|");
}
$handle = fopen("prispevky.txt",  "r");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    echo "Vzkaz ulozen";
}
echo '<br><a href="navstevni-kniha.php">Navstevni kniha</a>';
fclose($handle);