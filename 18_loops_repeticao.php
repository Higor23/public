<?php

/*
// ==============================
echo '<hr>';

for ($i = 0; $i < 10; $i ++) {
    echo "{$i} <br>";
}

echo '<hr>';

// ==============================
for ($i = 9; $i >= 0 ; $i--) {
    echo "{$i} <br>";
}

echo '<hr>';
*/
// ==============================

/*
$names = ['a', 'b', 'c', 'd', 'e'];

for($i = 0; $i<5; $i++) {
    echo "$names[$i] <br>";
}
*/
// ==============================

$names = ['a', 'b', 'c', 'd', 'e', 'f'];

for($i = 0; $i<count($names); $i++) {
    echo "$names[$i] <br>";
}
