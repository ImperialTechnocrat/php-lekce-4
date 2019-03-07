<?php
function maximum($a, $b) {
    if (is_numeric($a) and is_numeric($b)) {
        echo max($a, $b);
}   else {
        echo "Neobsahuje cislo";
    }

}

maximum(3,6);
    maximum(305, 421);
    maximum('x', 55);
