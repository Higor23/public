<?php

// ========================
/*
$i = 1;

while ($i < 10) {
    echo $i;

    $i++;
}
*/
// =========================
$names = ['a', 'b', 'c'];
$i = 0;

while($i <= count($names)){
    echo $names[$i];

    $i++;

}

echo '<hr>';
$a = 1;

do {
    echo $a;
    $a++;
} while ($a < 10);

