<?php
//phpinfo();
 //$foo = 22;
 //$bar = [2,4,6,8];
 //array_push($bar, $foo);
 //print_r($bar);

//izpis Hello World
echo "Hello World!<br>\n";
echo "------------------------------------<br>";

//izpis tabele
$fruits = array("Apple", "Orange" , "Lemon" , "Banana" , "Kiwi",  "Avocado", "Eldeberry");

$i=1;
foreach($fruits as $fruit){
    echo "<p>Fruit nr. $i: $fruit <p>";
    $i++;
}

$fruits2 =["Apple"=>23, "Orange"=>52, "Lemon"=>4];
$max=0;
$nameMax="";

//izpis tabele po abecedi - sort
echo "------------------------------------<br>";
$ii =1;
$fruits3 = array("Apple", "Orange" , "Lemon" , "Banana" , "Kiwi",  "Avocado", "Eldeberry");
sort(array: $fruits3);
foreach($fruits3 as $fruit){
    echo "<p>Fruit nr. $ii: $fruit <p>";
    $ii++;
}

echo "------------------------------------<br>";

//izpis sadja samo, če se sadje začne na samoglasnik
$iii = 1;
foreach ($fruits as $value){
    if (in_array($value[0], ['A', 'E', 'I', 'O', 'U']))
        echo 'Fruit nr.' . $iii . ': ' . $value . '<br><br>';
        $iii = $iii + 1;
}

//izpis max value ime sadja
foreach($fruits2 as $name => $value){
    if($value>$max){
        $max=$value;
        $nameMax=$name;
    }
}
echo "------------------------------------<br>";
echo " Max: " . $nameMax;
echo "<br>";

echo "------------------------------------<br>";
$AssocArray = [
    'key' => 1,
    'key2' => 2,
];

arsort($AssocArray);
$k = array_keys($AssocArray);
var_dump($k);
echo $k[0];
