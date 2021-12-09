<?php
//connect to database
$conn = mysqli_connect('localhost', 'root', '', 'Simpsons');

//change value of checkbox to figure out what to display
// $checked = ($_POST['checkbox']) ? 1 : 0; 
// sql = "INSERT INTO addbyhand VALUES ($checked)";


//select data to show
$query = 'SELECT * FROM addbyhand';
?>
<div class="characters__container layout-container">
<div class="characters__row layout-row">
<ul class="characters_items">
    <li class="characters_itemContainer">

    
    
    <?php if ($results = mysqli_query($conn, $query)):?>
        <?php while ($row = mysqli_fetch_array($results)):?>
            
            <div class="character_item">
                <img src=<?=$row['img_path']?> alt="" class="character_image" >
                
            <div class="character_info">
                <h3 class="character_name"><?= $row['first_name'] . $row['last_name']?></h3>
            
            <div class="characters_age characters_attribute">
                <b>Age:</b><?=$row['age']?>
            </div>
            <div class="characters_occupation characters_attribute">
                <php? if(!empty($row)):?>
                <b>Occupation:</b><?=$row['occupation']?>
                <php? endif ?>
            </div>
            <div class="characters_voicedBy characters_attribute">
                <b>Voiced by:</b><?=$row['voiced_by'] ?>
            </div>
            </div>
            </div> 
        <?php endwhile ?>
    <?php endif ?>

</li>
</ul>
</div>
</div>