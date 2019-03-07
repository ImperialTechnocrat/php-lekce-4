<?php
function minimalni($a, $b) {
    if (is_numeric($a) and is_numeric($b)) {
        return min($a, $b);
    }   else {
        return false;
    }

}

echo minimalni(5,4);