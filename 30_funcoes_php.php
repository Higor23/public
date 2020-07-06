<?php

date_default_timezone_set('America/Sao_Paulo');
echo 'O ano atual é: ' . date('y') . ' <br>';
echo 'O mês atual é: ' . date('m') . ' <br>';
echo 'O dia atual é: ' . date('d') . ' <br>';
echo 'A data de hoje é: ' . date('d/m/Y') . ' <br>';
echo 'A hora atual é: ' . date('H') . ' <br>';
echo 'Os minutos são: ' . date('i') . ' <br>';
echo 'Os segundos são: ' . date('s') . ' <br>';
echo 'A hora atual é: ' . date('H:i:s') . ' <br>';

echo 'Timezone: ' . date_default_timezone_get();