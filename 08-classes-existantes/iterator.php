<?php
// Design Patern : Iterator
// Un pattern permet de proposer une structure commune pour résoudre des problèmes similaires.

$fruit = [
    'p' => "pomme",
    'f' => 'fraise',
    'c' => "cerise"
];
$it1 = new ArrayIterator($fruit);
//var_dump($it1);
//print "<pre>";
//print_r(get_class_methods($it1));
//print "</pre>";

$it1->rewind();

while ($it1->valid()) {

    echo $it1->key() . " - " . $it1->current() . "<br>";
    $it1->next();
}

echo "<hr>";

//---------------------------------

$it2 = new DirectoryIterator("..");

//var_dump($it2);

//print '<pre>';
//print_r(get_class_methods($it2));
//print '<pre>';

$it2->rewind();

while ($it2->valid()) {

    echo $it2->key() . " - " . $it2->current() . "<br>";
    $it2->next();
}

echo "<hr>";
