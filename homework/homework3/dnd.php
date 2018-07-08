<!DOCTYPE HTML>
<html>
    <head>
        <title>DnD Character</title>
        <style>

            @import url("css/styles.css");

        </style>

    </head>
    
    <body>
        
        <h1 id="top-title">Create your Dungeons and Dragons character!</h1>
        
        <!-- name of character in a text box -->
        
        <form method="get">
            <label for="char-name">Enter character name:</label>
            <input id="char-name" name="charName" type="text" value="Bruenor the Brave">
        
            <br><br>
        
            <!-- radio for male or female -->
            Select your gender:
            <br>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
        
            <br><br>
        
            <!-- select for race -->
            <label for="race-select">Choose a race:</label>
            <br>
            <select id="race-select" name="race" value="human">
                <option value="human">Human</option>
                <option value="dwarf">Dwarf</option>
                <option value="elf">Elf</option>
                <option value="halfling">Halfling</option>
            </select>
        
            <br><br>
        
            <!-- select for class -->
            <label for="class-select">Choose a class:</label>
            <br>
            <select id="class-select" name="class" value="cleric">
                <option value="cleric">Cleric</option>
                <option value="fighter">Fighter</option>
                <option value="rogue">Rogue</option>
                <option value="wizard">wizard</option>
            </select>
            
            <br><br>
        
            <!-- checkbox for starter items -->
            <!-- submit button generates starting stats -->
        
            <input type="submit" value="Submit" />
        </form>
        
        <br><br>
        <?php
        
            if (isset($_GET['charName'])) {
                echo "Your character's name is " . $_GET['charName'] . ".";
                echo "<br>You are a " . $_GET['gender'] . " " . $_GET['race'] . ".";
                echo "<br>You have chosen to be a " . $_GET['class'] . ".";
            }
            
            
        ?>
        <br><br>
        <table id="tablehead" align="center">
            <tr>
                <th>Ability</th>
                <th>Base Stats</th>
                <th>Race Bonuses</th>
                <th>Total</th>
                <th>Modifiers</th>
            </tr>
        
            <tr>
                <td>Strength</td>
                <?php 
                echo '<td> <input type="number" id="strength" name="strengthVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusStr">';
                    $strength = 0;
                        if ($_GET['race'] == 'human') {
                            $strength = 1;
                            echo "$strength";
                        }
                        else {
                            $strength = 0;
                            echo "$strength";
                        }
                        
                echo '</td>';
                echo '<td id="str">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="strMod">';
                    
                echo '</td>'
                ?>
            </tr>
            
            <tr>
                <td>Dexterity</td>
                <?php 
                echo '<td> <input type="number" id="dexterity" name="dexterityVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusDex">';
                    $strength = 0;
                        if ($_GET['race'] == 'elf' || $_GET['race'] == 'halfling') {
                            $dexterity = 2;
                            echo "$dexterity";
                        }
                        else {
                            $dexterity = 0;
                            echo "$dexterity";
                        }
                        
                echo '</td>';
                echo '<td id="dex">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="dexMod">';
                    
                echo '</td>'
                ?>
            </tr>
            
        </table>
        <br><br>
        <button onclick="myFunction()">Calculate Stats</button>
        
        <script>
            function myFunction() {
                
                getStrength();
                getDexterity();
                
            }
            
            function getStrength() {
                var x = document.getElementById("strength").value;
                var y = document.getElementById("bonusStr").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("str").innerHTML = 20;
                } else {
                    document.getElementById("str").innerHTML = z;
                }
                document.getElementById("strMod").innerHTML = Math.floor((z - 10) / 2);
            }
            
            function getDexterity() {
                var x = document.getElementById("dexterity").value;
                var y = document.getElementById("bonusDex").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("dex").innerHTML = 20;
                } else {
                    document.getElementById("dex").innerHTML = z;
                }
                document.getElementById("dexMod").innerHTML = Math.floor((z - 10) / 2);
            }
        </script>
    </body>
</html>

