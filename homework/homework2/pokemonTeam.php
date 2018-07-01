<!DOCTYPE html>
<html>
    
    <head>
        <title>Pokemon Team</title>
    </head>
    
    <body>
        
        <h1>Your team.</h1>
        
        <?php
        
        $team = array();
        
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
            for ($i=0; $i < 6; $i++) {
                echo $team[$i] . "<br>";
            }
        
        }
        
        ?>
        
    </body>
    
</html>