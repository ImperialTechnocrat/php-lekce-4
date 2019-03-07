/**

1. Vytvořte soubor `ukol-``5``.php`
2. Vytvořte funkci `minimum`, která spočítá minimum z 2 čísel zadaných jako argumenty
3. Funkce vrátí výsledek (nejmenší číslo) pomocí příkazu `return`
4. Pokud první nebo druhý parametr není číselný, funkce vrátí hodnotu `false`
5. Funkci zavolejte s argumenty `56` a `12.3`, a výsledek vypište pomocí `echo`
6. Ošetřete návratovou hodnotu `false` - pokud ji funkce vrátí, vypište chybu
7. Změňte parametry na `56` a `'xy'`
*/
<?php
function retrieve($a, $b) {
    if (is_numberic($a) and is_numeric($b)) {
        return min($a, $b);
    }   else {
        return false;
    }

}

