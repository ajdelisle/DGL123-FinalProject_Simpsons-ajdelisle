<?php

$character=[

[
    "first_name" => "Homer",
"last_name" => "Simpson",
"age"=> "40",
"occupation" => " Nuclear Safety Inspector",
"voiced_by"=> "Dan Castellaneta"
],

[
"first_name" => "Marge",
"last_name" => "Simpson",
"age" => "40",
"occupation" =>"Homemaker",
"voiced_by" => "Julie Kavner"
],
];
foreach ($character as $item){
    if(isset($_POST['kl_vkbd_parsed="true"'])){
        echo "checked "."<br>";
    }
    
foreach ($item as $list => $attribute){
    $display = ucwords(str_replace("_"," ",$list));
    echo "{$display}: {$attribute}<br/>";
}
}