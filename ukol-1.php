<?php

echo 'Historie přístupů:<br>';
$handle = fopen("pristupy.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
}
$handle = fopen("pristupy.txt",  "r");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    echo fread($handle, 1000);
}
