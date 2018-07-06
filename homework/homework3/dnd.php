<!DOCTYPE HTML>
<html>
    <head>
        <title>DnD Character</title>
    </head>
    
    <body>
        
        <!-- name of character in a text box -->
        Enter your character name.
        <form>
            <input name="charName" type="text">
        
            <br><br>
        
            <!-- radio for male or female -->
            Select your gender.
            <br>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other  
        
            <br><br>
        
            <!-- select for race -->
            Choose your race.
            <br>
            <select name="racelist" form="raceform">
                <option value="human">Human</option>
                <option value="dwarf">Dwarf</option>
                <option value="elf">Elf</option>
                <option value="halfling">Halfling</option>
            </select>
        
            <br><br>
        
            <!-- select for class -->
            Choose your class.
            <br>
            <select name="classlist" form="classform">
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
                echo "<br>You are a " . $_GET['gender'];
                echo " " . $_GET['racelist'];
            }
        
        ?>
    </body>
</html>