<?php
//connect to database
$conn = mysqli_connect('localhost', 'root', '', 'Simpsons');

//change value of checkbox to figure out what to display
// $checked = ($_POST['checkbox']) ? 1 : 0; 
// sql = "INSERT INTO addbyhand VALUES ($checked)";


//select data to show
$query = 'SELECT * FROM addbyhand';

if ($results = mysqli_query($conn, $query)){
    while ($row = mysqli_fetch_array($results)){
        print "<p><h3>{$row['first_name']} {$row['last_name']}</h3>
        {$row['age']}<br>
        {$row['occupation']}<br>
        {$row['voiced_by']}<br>
        
        </p><hr />\n";
    }


}

