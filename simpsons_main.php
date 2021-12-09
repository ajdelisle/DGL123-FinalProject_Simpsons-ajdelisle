<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">
    <title>The Simpsons Archive</title>
    <!-- <style>
        @media print {#ghostery-tracker-tally {display: none !important}}
    </style> -->
    <?php $conn = mysqli_connect('localhost', 'root', '', 'Simpsons'); ?>
</head>

<body data-new-gr-c-s-check-loaded="8.891.0" data-gr-ext-installed=''>
   
    <header id="masthead" class="site-header layout-container">
        <a href="/">
            <img class="site-header_logo" src="images/logo.svg" alt="logo">
        </a>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
                <div class="form_container layout-container">
                    <div class="form_row layout-row">
                        <div class="form_itemsContainer">
                            <div class="form_imageContainer">
                                <img class="form_image" src="images/simpsons_family.jpg" alt="Simpsons">
                            </div>
                            <!--close imageContainer-->
                            <div class="form_card">
                                <h3 class="form_heading">
                                    Select characters to show
                                </h3>
                                <form method="post">
                                    <ul class="form_items">
                                        <li class="form_item">
                                            <label for="homer"> Homer Simpson</label>
                                            <input id="homer" type="checkbox" name="homer" kl_vkbd_parsed="true">
                                        </li>
                                        <li class="form_item">
                                            <label for="marge"> Marge Simpson</label>
                                            <input id="marge" type="checkbox" name="marge" kl_vkbd_parsed="true">
                                        </li>
                                        <li class="form_item">
                                            <label for="bart"> Bart Simpson</label>
                                            <input id="bart" type="checkbox" name="bart" kl_vkbd_parsed="true">
                                        </li>
                                        <li class="form_item">
                                            <label for="lisa"> Lisa Simpson</label>
                                            <input id="lisa" type="checkbox" name="lisa" kl_vkbd_parsed="true">
                                        </li>
                                        <li class="form_item">
                                            <label for="maggie"> Maggie Simpson</label>
                                            <input id="maggie" type="checkbox" name="maggie" kl_vkbd_parsed="true">
                                        </li>
                                        <li class="form_item">
                                            <label for="moe"> Moe Szslak</label>
                                            <input id="moe" type="checkbox" name="moe" kl_vkbd_parsed="true">
                                        </li>
                                    </ul>
                                    <input class="form_button" type="submit" value="Show Characters" kl_vkbd_parsed="true">
                                </form>
                            </div>
                            <!--close form_card-->
                        </div>
                        <!--close form_itemsContainer-->
                    </div>
                    <!--close form_row-->
                </div>
                <!--close form_container-->
                <div class="characters_container layout-container">
                    <div class="characters_row layout-row">
                        <ul class="characters_items"></ul>
                    </div>
                    <!--characters_row-->
                </div>
                <!--characters_container-->
            </div>
            <!--close main-->
        </div>
        <!--close primary-->
    </div>
    <!--close content-->
    <!-- <?php require 'simpsons_array.php'; ?>  -->
    <!-- <?php require 'testing_simpson.php'; ?>  -->
    <?php require 'final-try.php'; ?>
</body>

</html>