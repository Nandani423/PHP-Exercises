<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 1;
while($i <= 10) 
{
  echo "$i <br>";
  $i++;
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

//Our number.
$number = 8;
 
//Get the remainder.
 
//If the remainder is NOT 0, then
//it is an odd number.
 $multi = range(5,100,5);
// For reference:
print_r($multi);
 echo "<br>";

$even= "";
 $odd= "";

for ($multi = 0; $multi <= 100; $multi += 5) {
    if ($multi%2==0) {
    $even.=$multi."  ";
    } else {
    $odd.=$multi." "; 
	}
}

echo "$odd";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Use while-loop to print array elements (every food in a new row).
*/

/*
Use for-loop to print array elements (every food in a new row).
*/

/*
Use foreach-loop to print array elements (every food in a new row).
*/


$food = array('potato','rice','milk','tea');
print_r($food);
echo "<br>";
$n = 0;
while ($n === 0) {
	echo "$food[0]"."<br>";
	$n ++;
	echo "$food[1]"."<br>";
	$n ++;
	echo "$food[2]"."<br>";
	$n ++;
	echo "$food[3]"."<br>";
	$n ++;
}
echo "<br>";
for ($n = 0; $n <= 3; $n++) { 
	if ($n === 0) {
		echo "$food[0]"."<br>";
	} else if ($n === 1) {
		echo "$food[1]"."<br>";
	} else if ($n === 2) {
		echo "$food[2]"."<br>";
	} else {
		echo "$food[3]"."<br>";
	}
}
echo "<br>";
foreach ($food as $y) {
	echo "$y <br>";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
$k = 0;
echo "<ul>";
for ($k = 0; $k <= 3; $k ++) { 
	if ($k === 0) {
		echo "<li>$food[0]</li>";
	} else if ($k === 1) {
		echo "<li>$food[1]</li>";
	} else if ($k === 2) {
		echo "<li>$food[2]</li>";
	} else {
		echo "<li>$food[3]</li>";
	}
}
echo "</ul>";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/

/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

$food_assoc = [
	"potato" => [
    	"type" => "vegetable",
    	"origin" => "india"
  	],
  	"rice" => [
    	"type" => "main course",
    	"origin" => "india"
  	],
  	"milk" => [
  		"type" => "drink",
    	"origin" => "cow"
  	], 
  	"tea" => [
  		"type" => "drink",
    	"origin" => "japan"
  	]
];

print_r($food_assoc);

// task separator
echo "<hr style=\"margin 1rem 0\">";

echo "<br><br> My favourite meals: 
<ul>";
foreach ($food_assoc as $x => $x_value) {
    echo "<li>" . $x . "</li>
    <ul>" . "<li>" . $x_value['type'] . "</li>
    <li>" . $x_value['origin'] . "</li>
    </ul>";
}
echo "</ul>";


?>