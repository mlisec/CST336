<?php

    $backgroundImage = "img/sea.jpg";
    
?>

<!DOCTYPE HTML>
<html>
    
    <head>
        
        <title>Image Carousel</title>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
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
            }
            
            if (isset($_GET['keyword'])) {
                include 'api/pixabayAPI.php';
                $imageURLs = getImageURLs($_GET['keyword']);
                print_r($imageURLs);
            }
            
        ?>
        
        <form>
            
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit" />
            
        </form>
        
        <br><br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        
    </body>
    
</html>