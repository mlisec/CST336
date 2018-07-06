<!DOCTYPE HTML>
<html>
    <head>
        <title>DnD Character</title>
    </head>
    
    <body>
        
        <!-- name of character in a text box -->
        Enter your character name.
        <form>
            <input name="charName" type="text" value="Bruenor the Brave">
        
            <br><br>
        
            <!-- radio for male or female -->
            Select your gender.
            <br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other  
        
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
            Choose your class.
            <br>
            <select name="class" value="cleric">
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
                echo "Your character's name is " . $_GET['charName'];
                echo "<br>You are a " . $_GET['gender'] . " " . $_GET['race'] . ".";
            }
        
        ?>
    </body>
</html>