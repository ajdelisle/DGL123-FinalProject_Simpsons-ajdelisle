<?php

// connect database for characters
$conn = mysqli_connect('localhost', 'root', '', 'Simpsons');
//set up multidimensional array with card info for each simpson
$characters= [
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




?>
<!-- first I want to display all characters in the array, as their own li within a ul -->
<ul>
    <?php foreach($characters as $character) :?>
        
       
       <img src = "images/homer.png">

        <?php foreach($character as $list => $attribute) :?>
           <?php $display = ucwords(str_replace("_"," ",$list)) ?>
                <li><b><?= "{$display}:" ?></b> <?= "{$attribute}" ?></li>
          
        <?php endforeach ?>    
    <?php endforeach ?>  
</ul>
<!-- ok correctly displays all items in multi array, each needs styling now, and image is not working  -->


 
   
   <!-- <?php if (isset($_GET)):?> looking to select only checked character cards to show
  
    <?php endif ?> --> -->