<?php
/*
Manipulação de arrays

========= array_keys and array_dump ============

$infoCompany = [
    'name' => 'Cactus',
    'founder' => 'Higor',
    'currentYear' => '2020'
];

$infoCompanyTwo = [
    'courses' => ['PHP', 'JS', 'Vue', 'Laravel'],
    'totalCourses' => [26]
];

var_dump($infoCompany['name']);

print_r(array_keys($infoCompany)); //retorna somente as chaves do array.
print_r(array_values($infoCompany)); //retorna somente os valores do array.


print_r(count($infoCompany)); // conta quantas posições tem o array.

echo '<pre>';
$company = (array_merge($infoCompany, $infoCompanyTwo));

print_r($company);

*/