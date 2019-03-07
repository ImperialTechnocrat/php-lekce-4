<?php
function retrieve($a, $b) {
    if (is_numberic($a) and is_numeric($b)) {
        return min($a, $b);
    }   else {
        return false;
    }

}

retrieve(5,4);