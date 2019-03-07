<?php

echo 'Historie přístupů:<br>';
$handle = fopen("pristupy.txt",  "w");
$date = fileatime( $handle );
echo $date;
