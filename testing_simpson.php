<?php
$conn = mysqli_connect('localhost', 'root', '', 'simpson_final');
if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}
// $homer = "first_name"."last_name";
// $marge = "first_name"."last_name";
$homer= $_POST["homer"];
$marge= $_POST["marge"];
$bart= $_POST["bart"];
$lisa= $_POST["lisa"];
$maggie= $_POST["maggie"];
$moe= $_POST["moe"];

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
$json_char = json_encode($characters);
mysqli_query($conn, "insert into characters(character) values ('$json_char')");
echo "Record inserted successfully.";

$sql = "INSERT into characters (homer,marge,bart,lisa,maggie, moe) VALUES (?,?, ?, ?, ?, ?)";
$statement = $conn->prepare($sql);
$statement->bind_param('ssi', $homer, $marge, $bart, $lisa, $maggie, $moe);
$statement->execute();

// foreach ($character as $item){
//     if(isset($_POST['kl_vkbd_parsed="true"'])){
//         echo "checked "."<br>";
//     }
    
// foreach ($item as $list => $attribute){
//     $display = ucwords(str_replace("_"," ",$list));
//     echo "{$display}: {$attribute}<br/>";
// }

