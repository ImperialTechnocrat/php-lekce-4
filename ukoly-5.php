<?php
function minimalni($a, $b) {
    if (is_numeric($a) and is_numeric($b)) {
        return min($a, $b);
    }   else {
        return false;
    }

}





if(minimalni(3,5)) {
    echo 'chyba';
}   else {
    echo minimalni(3,5);
}