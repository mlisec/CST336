<?php

    $backgroundImage = "img/sea.jpg";
    
?>

<!DOCTYPE HTML>
<html>
    
    <head>
        
        <title>Image Carousel</title>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            
            @import url("css/styles.css");
            
            body {
                background-image: url('<?=$backgroundImage ?>');
            }
            
        </style>
    </head>
    
    <body>
        
        <br><br>
        
        <?php
        
            if (!isset($imageURLs)) {
                echo "<h2> Type a keyword to display a slideshow <br> with random images from Pixbay.com </h2>";
            } else {
                //Display Carousel Here
                for ($i = 0; $i < 5; $i++) {
                    echo "<img src='" . $imageURLs[$i] . "' width='200'>";
                }
            }
            
            if (isset($_GET['keyword'])) {
                include 'api/pixabayAPI.php';
                $imageURLs = getImageURLs($_GET['keyword']);
                $backgroundImage = $imageURLs[array_rand($imageURLs)];
            }
            
        ?>
        
        <form>
            
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit" />
            
        </form>
        
        <br><br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
        
    </body>
    
</html>