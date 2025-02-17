<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // task1
$colors=["red","green","white"] ;
 echo "<p>
The memory of that scene for me is like a frame of film forever frozen at that moment:the".$colors[0]."
carpet, the".$colors[1]." lawn, the".$colors[2]. "house, the leaden sky. The new president and his first lady. - 
Richard M. Nixon
<p>" ;
echo "<hr>";
// task2
$colors=["red","green","white"] ;
echo "<ul>";
foreach($colors as $color){
echo "<li> $color </li>";
}
echo"</ul>";
echo "<hr>";
// task3

$cities= array( "Italy"=>"Rome",
 "Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", 
 "France" => "Paris", 
"Slovakia"=>"Bratislava",
 "Slovenia"=>"Ljubljana", 
 "Germany" => "Berlin", 
 "Greece" => "Athens", 
 "Ireland"=>"Dublin",
 "Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon", 
"Spain"=>"Madrid"); 

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital"."<br>";
}

echo "<hr>";
// task4

$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo reset($color)."<br>";

echo "<hr>";
// task5

$array = array(1, 2, 3, 4, 5);
// $location = 4;
$new_item = "$";
array_splice($array, 3, 0, $new_item);
foreach ($array as $item) {
    echo $item ;
};
echo "<br>";

echo "<hr>";
// task6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); 
sort($fruits);
foreach ($fruits as $fruit) {
   echo $fruit."<br>";
};
echo "<hr>";
// task7
$temp=[ 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73 ];

$total=array_sum($temp);
$count= count($temp);
$avg=$total/$count;
echo "avg temp:$avg"."<br>";

sort($temp);
$highest=array_slice($temp,0,5);
echo "hight five temp:". implode(", ", $highest) ;

echo "<br>";

$lwoerest=array_slice($temp,-5);
echo "lower five temp:". implode(", ", $lwoerest);
echo "<hr>";

// task8

$array1 = array("color" => "red", 2, 4); 
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$array3= array_merge($array1,$array2);
foreach ($array3 as $key=>$value){
    echo "$key=>$value"." ";
}
echo "<hr>";
//task9
$color = array("red","blue", "white","yellow"); 
$uppercasecolor = array_map("strtoupper",$color) ;
foreach ($uppercasecolor as $color1){
    echo $color1 .",";
};
echo "<hr>";
// task10

$color = array("red","blue", "white","yellow"); 
$lowercasecolor = array_map("strtolower",$color) ;
foreach ($lowercasecolor as $color1){
    echo $color1 .",";
};
echo "<hr>";

// task11
$words =  array("abcd","abc","de","hjjj","g","wer") ;
$length= array_map("strlen",$words);
$shortest=min($length);
echo "shortest: $shortest","<br>";
$longest=max ($length) ;
echo "longest: $longest";

echo "<hr>";

// task12
$array1 = array( 2, 0, 10, 12, 6); 
$filterarray=array_filter($array1);
$lowestint=min($filterarray);
echo $lowestint


    ?>
</body>
</html>