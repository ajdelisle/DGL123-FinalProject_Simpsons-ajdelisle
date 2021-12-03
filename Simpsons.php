<?php
//set up multidimensional array with card info for each simpson

use function PHPSTORM_META\type;

$simpsons_array = [
   [
       
        "first_name" => "Homer",
        "last_name" => "Simpson",
        "age"=> "40",
        "occupation" => " Nuclear Safety Inspector",
        "voiced_by"=> "Dan Castellaneta",
        
   ], 

  [
        "first_name" => "Marge",
        "last_name" => "Simpson",
        "age" => "40",
        "occupation" =>"Homemaker",
        "voiced_by" => "Julie Kavner",
        
  ],

    [
        "first_name" => "Bart",
        "last_name" => "Simpson",
        "age" => "10",
        "occupation" => "Student",
        "voiced_by" => "Nancy Cartwright",
        
    ],

   [
        "first_name" => "Lisa",
        "last_name" => "Simpson",
        "age" =>"8",
        "occupation" => "Student",
        "voiced_by" => "Yeardley Smith",
        
   ],
    
  [
        "first_name" => "Maggie",
        "last_name" => "Simpson",
        "age" => "8",
       
  ],

    [
        "first_name" => "Moe",
        "last_name" => "Szyslak",
        "age" => "55",
        "occupation" => "Bartender",
        "voiced_by" => "",
       
    ],
];

// echo "<pre>";
// print_r($simpsons_array);
// echo "</pre>";

//first I want to display all characters in the array, as their own li within a ul
//ok correctly displays all items in multi array, each needs styling now, and image is not working 

?>

<ul>
    <?php foreach($simpsons_array as $character) :?>
        <img src="images/<?=($character[$card])?>.png" ?>
        <?php foreach($character as $card) :?>
           
                <li><?=$card?></li>
          
        <?php endforeach ?>    
    <?php endforeach ?>  
</ul>

<!-- <img src = "images/<?=($characters[$i])?>.png"
​<li><img src = "images/<?=($characters[$i])?>.png"  alt <?= ucwords($characters[$i]) ?> /><h3> <?= ucwords($characters[$i]) ?> </h3> </li>
   -->
   
   <!-- <?php if(type($checkbox)== true) :?> looking to select only checked character cards to show-->
   <!-- <img src="images/<?=($character[$card])?>.png"/>  -->
     <!-- <?php endif ?> -->