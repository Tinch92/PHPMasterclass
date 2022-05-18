<?php
//phpinfo();
 //$foo = 22;
 //$bar = [2,4,6,8];
 //array_push($bar, $foo);
 //print_r($bar);
echo "Hello World!<br>\n";
echo "------------------------------------<br>";

$fruits = array("Apple", "Orange" , "Lemon" , "Banana" , "Kiwi",  "Avocado", "Eldeberry");
sort(array: $fruits);

$i=1;

foreach($fruits as $fruit){
    echo "<p>Fruit nr. $i: $fruit <p>";
    $i++;
 }
$fruits2 =["Apple"=>23, "Orange"=>52, "Lemon"=>4];

$max=0;
$nameMax="";

echo "------------------------------------<br>";
$ii = 1;
foreach ($fruits as $value)
{
    if (in_array($value[0], ['A', 'E', 'I', 'O', 'U']))
        echo 'Fruit nr.' . $ii . ': ' . $value . '<br><br>';
        $ii = $ii + 1;
}

foreach($fruits2 as $name => $value)
{
    if($value>$max){
        $max=$value;
        $nameMax=$name;
    }
}
echo "------------------------------------<br>";
echo " Max: " . $nameMax;
