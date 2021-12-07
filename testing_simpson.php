<?php

$character = array(
"first_name" => "Homer",
"last_name" => "Simpson",
"age"=> "40",
"occupation" => " Nuclear Safety Inspector",
"voiced_by"=> "Dan Castellaneta"
);

foreach ($character as $list => $attribute){
    $display = ucwords(str_replace("_"," ",$list));
    echo "{$display}: {$attribute}<br/>";
}