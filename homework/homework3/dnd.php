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
        <div id="charInfo">
        <?php
        
            if (isset($_GET['charName'])) {
                echo "Your character's name is " . $_GET['charName'] . ". ";
                echo "You are a " . $_GET['gender'] . " " . $_GET['race'] . ".";
                echo "<br>You have chosen to be a " . $_GET['class'] . ". ";
                
                if ($_GET['class'] == "cleric") {
                    echo "A cleric's focus should be Wisdom.";
                }
                else if ($_GET['class'] == "fighter") {
                    echo "A fighter's focus should be Strength or Dexterity.";
                }
                else if ($_GET['class'] == "rogue") {
                    echo "A rogue's focus should be Dexterity.";
                }
                else {
                    echo "A wizard's focus should be Intelligence.";
                }
                
            }
            
            
        ?>
        </div>
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
                    $dexterity = 0;
                        if ($_GET['race'] == 'elf' || $_GET['race'] == 'halfling') {
                            $dexterity = 2;
                            echo "$dexterity";
                        }
                        else if ($_GET['race'] == 'human') {
                            $dexterity = 1;
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
            
            <tr>
                <td>Constitution</td>
                <?php 
                echo '<td> <input type="number" id="constitution" name="constitutionVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusCon">';
                    $constitution = 0;
                        if ($_GET['race'] == 'dwarf') {
                            $constitution = 2;
                            echo "$constitution";
                        }
                        else if ($_GET['race'] == 'human') {
                            $constitution = 1;
                            echo "$constitution";
                        }
                        else {
                            $constitution = 0;
                            echo "$constitution";
                        }
                        
                echo '</td>';
                echo '<td id="con">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="conMod">';
                    
                echo '</td>'
                ?>
            </tr>
            
            <tr>
                <td>Intelligence</td>
                <?php 
                echo '<td> <input type="number" id="intelligence" name="intelligenceVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusInt">';
                    $intelligence = 0;
                        
                        if ($_GET['race'] == 'human') {
                            $intelligence = 1;
                            echo "$intelligence";
                        }
                        else {
                            $intelligence = 0;
                            echo "$intelligence";
                        }
                        
                echo '</td>';
                echo '<td id="int">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="intMod">';
                    
                echo '</td>'
                ?>
            </tr>
            
            <tr>
                <td>Wisdom</td>
                <?php 
                echo '<td> <input type="number" id="wisdom" name="wisdomVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusWis">';
                    $wisdom = 0;
                        
                        if ($_GET['race'] == 'human') {
                            $wisdom = 1;
                            echo "$wisdom";
                        }
                        else {
                            $wisdom = 0;
                            echo "$wisdom";
                        }
                        
                echo '</td>';
                echo '<td id="wis">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="wisMod">';
                    
                echo '</td>'
                ?>
            </tr>
            
            <tr>
                <td>Charisma</td>
                <?php 
                echo '<td> <input type="number" id="charisma" name="charismaVal" value="3" step="1" min="3" max="20"> </td>';
                echo '<td id="bonusCha">';
                    $charisma = 0;
                        
                        if ($_GET['race'] == 'human') {
                            $charisma = 1;
                            echo "$charisma";
                        }
                        else {
                            $charisma = 0;
                            echo "$charisma";
                        }
                        
                echo '</td>';
                echo '<td id="cha">';
                    //This is where the Javascript function outputs
                echo '</td>';
                echo '<td id="chaMod">';
                    
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
                getConstitution();
                getIntelligence();
                getWisdom();
                getCharisma();
                
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
            
            function getConstitution() {
                var x = document.getElementById("constitution").value;
                var y = document.getElementById("bonusCon").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("con").innerHTML = 20;
                } else {
                    document.getElementById("con").innerHTML = z;
                }
                document.getElementById("conMod").innerHTML = Math.floor((z - 10) / 2);
            }
            
            function getIntelligence() {
                var x = document.getElementById("intelligence").value;
                var y = document.getElementById("bonusInt").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("int").innerHTML = 20;
                } else {
                    document.getElementById("int").innerHTML = z;
                }
                document.getElementById("intMod").innerHTML = Math.floor((z - 10) / 2);
            }
            
            function getWisdom() {
                var x = document.getElementById("wisdom").value;
                var y = document.getElementById("bonusWis").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("wis").innerHTML = 20;
                } else {
                    document.getElementById("wis").innerHTML = z;
                }
                document.getElementById("wisMod").innerHTML = Math.floor((z - 10) / 2);
            }
            
            function getCharisma() {
                var x = document.getElementById("charisma").value;
                var y = document.getElementById("bonusCha").innerText;
                var z = parseInt(x) + parseInt(y);
                if (z >= 20) {
                    document.getElementById("cha").innerHTML = 20;
                } else {
                    document.getElementById("cha").innerHTML = z;
                }
                document.getElementById("chaMod").innerHTML = Math.floor((z - 10) / 2);
            }
        </script>
    </body>
    
    <footer>
        <p>This tool will help start a DnD character.</p>
        <p><img id="dndlogo" src="img/dnd_logo.jpg" alt="dndlogo" title="Dndlogo"></p>
    </footer>
</html>

