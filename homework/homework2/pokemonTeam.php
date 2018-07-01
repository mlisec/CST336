<!DOCTYPE html>
<html>
    
    <head>
        <title>Pokemon Team</title>
        
        <style>

            @import url("css/styles.css");

        </style>

    </head>
    
    <body>
        
        <h1>Your team!</h1>
        
        <?php
        
        $team = array();
        
        generateTeam();
        
        function generateTeam(){
            createTeam();
            displayTeam();
        }
        
        function createTeam(){
            global $team;
            while (count($team) < 6) {
                $x = rand(0,17);
                while (in_array($x, $team)) {
                    $x = rand(0,17);
                }
                
                array_push($team, $x);
            }
            
        }
        
        function displayTeam(){
            global $team;
            
            foreach ($team as $a){
                switch ($a){
                    
                    case 0: $name = "bulbasaur";//check
                    
                            break;
                            
                    case 1: $name = "squirtle";//check
                    
                            break;
                            
                    case 2: $name = "charmander";//check
                    
                            break;
                            
                    case 3: $name = "rockruff";//check
                    
                            break;
                            
                    case 4: $name = "weedle";//check
                    
                            break;
                            
                    case 5: $name = "dratini";//check
                    
                            break;
                            
                    case 6: $name = "vanillite";//check
                    
                            break;
                            
                    case 7: $name = "machop";//check
                    
                            break;
                            
                    case 8: $name = "pikipek";//check
                    
                            break;
                            
                    case 9: $name = "duskull";//check
                    
                            break;
                            
                    case 10: $name = "phanpy";//check
                    
                            break;
                            
                    case 11: $name = "shinx";//check
                    
                            break;
                            
                    case 12: $name = "lillipup";//check
                    
                            break;
                            
                    case 13: $name = "gulpin";//check
                    
                            break;
                            
                    case 14: $name = "abra";//check
                    
                            break;
                            
                    case 15: $name = "purrloin";//check
                    
                            break;
                            
                    case 16: $name = "klink";//check
                    
                            break;
                            
                    case 17: $name = "spritzee";//check
                    
                            break;
                }
            
            
            echo "<img src='img/$name.png' alt='$name' title='". ucfirst($name) . "'>";
            
            /*for ($i=0; $i < 6; $i++) {
                echo $team[$i] . "<br>";
            }*/
            }
        }
        
        ?>
        
    </body>
    
</html>