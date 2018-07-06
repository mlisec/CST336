<!DOCTYPE HTML>
<html>
    <head>
        <title>DnD Character</title>
    </head>
    
    <body>
        <!-- name of character in a text box -->
        Enter your character name.
        <input name="charName" type="text">
        <br><br>
        
        <!-- radio for male or female -->
        Select your gender.
        <form>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other  
        </form>
        <br><br>
        
        <!-- select for race -->
        Choose your race.
        <select name="racelist" form="raceform">
            <option value="human">Human</option>
            <option value="dwarf">Dwarf</option>
            <option value="elf">Elf</option>
            <option value="halfling">Halfling</option>
        </select>
        <!-- select for class -->
        <!-- checkbox for starter items -->
        <!-- submit button generates starting stats -->
        
    </body>
</html>