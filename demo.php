<?php

$handle = fopen('objednavky.csv', 'r');
if ($handle) {
    while (($line = fgets($handle, 4096)) !== false) {
        $exploded = explode(';', $line);

        foreach ($exploded as $item) {
            echo "$item | ";
        }
    }
    echo fgets($handle, 4032);
}