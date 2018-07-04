<?php

    $backgroundImage = "img/sea.jpg";
    
    if(isset($_GET['keyword'])) {
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $imageURLs = getImageURLs($keyword);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
    
?>

<!DOCTYPE HTML>
<html>
    
    <head>
        
        <title>Image Carousel</title>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            
            @import url("css/styles.css");
            
            body {
                background-image: url(<?=$backgroundImage?>);
            }
            
        </style>
    </head>
    
    <body>
        
        <br>
        
        <?php
        
        
            
        
            if(!isset($imageURLs)) {
                echo "<h2> Type a keyword to display a slideshow <br> with random images from Pixbay.com </h2>";
            } else {
                //Display Carousel Here
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            
            <ol class="carousel-indicators">
                <?php
                for ($i = 0; $i < 7; $i++) {
                    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                    echo ($i == 0) ? "class='active'" : "";
                    echo "></li>";
                    
                }
                
                ?>
            </ol>
            
            <div class="carousel-inner" role="listbox">
                
                <?php
            
                
                for ($i = 0; $i < 7; $i++) {
                    do {
                        $randomIndex = rand(0, count($imageURLs));
                    }
                    while (!isset($imageURLs[$randomIndex]));
                    
                    echo '<div class="item ';
                    echo ($i == 0) ? "active" : "";
                    echo '">';
                    echo '<img src="' . $imageURLs[$randomIndex] . '" >';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                }
            
            
        ?>
        
            </div>
           
           
           <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
           
        </div>
        <?php
        
            }
            
        ?>
        <br>
        
        <form>
            
            <input type="text" name="keyword" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
            <br>
            <input type = "radio" id = "lhorizontal" name = "layout" value = "horizontal">
            <label for = "Horizontal"></label><label for="lhorizontal">Horizontal</label>
            <input type = "radio" id = "lvertical" name = "layout" value = "vertical">
            <label for = "Vertical"></label><label for = "lvertical">Vertical</label>
            <br>
            <select name = "category">
                <option value ="">Select One</option>
                <option value = "ocean">Sea</option>
                <option value = "forest">Forest</option>
                <option value = mountain>Mountain</option>
                <option value = snow>Snow</option>
            </select>
            
            <input type="submit" value="Submit" />
            
        </form>
        
        <br><br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
        
    </body>
    
</html>