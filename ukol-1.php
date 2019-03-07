<?php

echo 'Historie přístupů:<br>';
$handle = fopen("pristupy.txt",  "a");
if ($handle === false) {
    echo "File cannot be opened";
}   else {
    fwrite($handle, date('Y-m-d H:i:s') . "<br>\n");
}
echo fread($handle, 1000);
