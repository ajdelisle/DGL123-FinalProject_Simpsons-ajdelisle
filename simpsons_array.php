<?php

// connect database for characters
$conn = mysqli_connect('localhost', 'root', '', 'Simpsons');

//set up multidimensional array with info for each character
// $homer= $_GET["homer"];
// $marge= $_GET["marge"];
// $bart= $_GET["bart"];
// $lisa= $_GET["lisa"];
// $maggie= $_GET["maggie"];
// $moe= $_GET["moe"];

$characters = array(

    "homer" => array(
        "first_name"=> "Homer",
        "last_name"=> "Simpson",
        "age"=> "40",
        "occupation"=> " Nuclear Safety Inspector",
        "voiced_by"=> "Dan Castellaneta",
        "image_url"=> "images/homer.png"
    ),
    "marge"=> array(
        "first_name" => "Marge",
        "last_name" => "Simpson",
        "age"=> "40",
        "occupation"=> "Homemaker",
        "voiced_by"=> "Julie Kavner",
        "image_url"=> "images/marge.png"
    ),
    "bart"=> array(
        "first_name"=> "Bart",
        "last_name"=> "Simpson",
        "age"=> "10",
        "occupation"=> "Student",
        "voiced_by"=> "Nancy Cartwright",
        "image_url"=> "images/bart.png"
    ),
    "lisa"=> array(
        "first_name"=> "Lisa",
        "last_name"=> "Simpson",
        "age"=> "8",
        "occupation"=> "Student",
        "voiced_by"=> "Yeardley Smith",
        "image_url"=> "images/lisa.png"
    ),
    "maggie"=> array(
        "first_name"=> "Maggie",
        "last_name"=> "Simpson",
        "age"=> "8",
        "image_url"=> "images/maggie.png"
    ),
    "moe"=> array(
        "first_name"=> "Moe",
        "last_name"=> "Szyslak",
        "age"=> "55",
        "occupation"=> "Bartender",
        "voiced_by"=> "",
        "image_url"=> "images/moe.png"
    )
);

// echo "<pre>";
// print_r($characters);
// echo "</pre>";




?>
<!-- first I want to display all characters in the array, as their own li within a ul  -->
<ul>
    <!-- setting conditional that if submit is hit then we would fetch info for these characters -->
    <?php if ( isset( $_GET['submit'] ) ):?>
    <?= $homer= $_GET["homer"];$marge= $_GET["marge"];
        $bart= $_GET["bart"]; $lisa= $_GET["lisa"];
        $maggie= $_GET["maggie"]; $moe= $_GET["moe"];?>

    <?php foreach($characters as $character) :?>
       <!-- this cycles through the first array of character blocks -->
        <?php foreach($character as $list => $attribute) :?>
           <!-- this cycles through the individual attributes in the list of character blocks -->
           <?php $display = ucwords(str_replace("_"," ",$list)) ?>
                <li><img src = <?="images/[$characters[$character].png"?>><b><?= "{$display}:" ?></b> <?= "{$attribute}" ?></li>
                <!-- here i am trying to display the image as well as the words -->
        <?php endforeach ?>   
        
    <?php endforeach ?>  
<?php endif ?> 
</ul>


   
  