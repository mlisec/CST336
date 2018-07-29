function hittest(a, b, i) {

    var aX1 = parseInt(a.style.left); //pc position in x
    var aY1 = parseInt(a.style.top); //pc position in y
    var aX2 = aX1 + parseInt(a.style.width) - 1; //inside pc in x position by 1 px
    var aY2 = aY1; //duplicate vertical position
    var aX3 = aX1; //duplicate horizontal position
    var aY3 = aY1 + parseInt(a.style.height) - 1; //inside pc in y postion by 1 px
    var aX4 = aX2; //duplicate inside pc in x position by 1 px
    var aY4 = aY3; //duplicate inside pc in y postion by 1 px

    var bX1 = parseInt(b.style.left); //platform position in x
    var bY1 = parseInt(b.style.top); //platform position in y
    var bX2 = bX1 + parseInt(b.style.width) - 1; //inside platform position by 1 px
    var bY2 = bY1; //duplicate vertical position
    var bX3 = bX1; //duplicate horizontal position
    var bY3 = bY1 + parseInt(b.style.height) - 1;
    var bX4 = bX2;
    var bY4 = bY3;

    var hOverlap = true;
    if (aX1 < bX1 && aX2 < bX1) hOverlap = false;
    if (aX1 > bX2 && aX2 > bX2) hOverlap = false;

    var vOverlap = true;
    if (aY1 < bY1 && aY3 < bY1) vOverlap = false;
    if (aY1 > bY3 && aY3 > bY3) vOverlap = false;


/*
    $("#output").html(
        "i = " + i + "<br>" +
        "aX1 < bX1 && aX2 < bX1 <br />" +
        aX1 + " < " + bX1 + " && " + aX2 + " < " + bX1 + "<br />" +
        "aX1 > bX2 && aX2 > bX2 <br />" +
        aX1 + " > " + bX2 + " && " + aX2 + " > " + bX2 + "<br />" +
        "aY1 < bY1 && aY3 < bY1 <br />" +
        aY1 + " < " + bY1 + " && " + aY3 + " < " + bY1 + "<br />" +
        "aY1 > bY3 && aY3 > bY3 <br />" +
        aY1 + " > " + bY3 + " && " + aY3 + " > " + bY3 + "<br />"
    );
*/
    if (hOverlap && vOverlap) return true;
    else return false;


}

var pc;
var npc_prince;
//var output;
var leftArrowDown = false;
var rightArrowDown = false;
var upArrowDown = false;
var gameTimer;

const GRAVITY = 1;
var fallSpeed = 0;

var platforms = new Array();
var level = 0;

var lifebar;
var numLives = 0;

function init() {
    //output = document.getElementById('output');
    //output.innerHTML = level;

    lifebar = document.getElementById('lifebar');
    for (var i = 0; i < 3; i++) {
        addLife();
    }

    pc = document.getElementById('pc');
    $("#pc").width('20px').height('40px');
    //pc.style.width = '20px';
    //pc.style.height = '40px';

    npc_prince = document.getElementById('npc_prince');
    $("#npc_prince").width('20px').height('40px');
    //npc_prince.style.width = '20px';
    //npc_prince.style.height = '40px';

    nextLevel();
    
    $(document).on("keydown", function(event){
	
	if (event.keyCode == 37) leftArrowDown = true;
    if (event.keyCode == 39) rightArrowDown = true;
    if (event.keyCode == 38) upArrowDown = true;	
	});
	
	$(document).on("keyup", function(event) {
    if (event.keyCode == 37) leftArrowDown = false;
    if (event.keyCode == 39) rightArrowDown = false;
    if (event.keyCode == 38) upArrowDown = false;
});
}

function addPlatform(x, y, w, h) {
    var p = document.createElement('DIV');
    
    p.className = 'platform';
    p.style.left = x + 'px';
    p.style.top = y + 'px';
    p.style.width = w + 'px';
    p.style.height = h + 'px';
    platforms.push(p);
    gameWindow.appendChild(p);
}

function gameloop() {
    // HORIZONTAL MOVEMENT
    if (leftArrowDown) {
        pc.style.left = parseInt(pc.style.left) - 5 + 'px';

        var sideHit = false;
        for (var i = 0; i < platforms.length; i++) {
            if (hittest(pc, platforms[i], i)) {
                sideHit = true;


            }
            //$("#output").html("sideHit = " + sideHit);
            pc.style.left = parseInt(pc.style.left) + 5 + 'px';
            console.log(sideHit);


            if (!sideHit) {
                for (var i = 0; i < platforms.length; i++) {
                    platforms[i].style.left = parseInt(platforms[i].style.left) + 5 + 'px';
                }
                npc_prince.style.left = parseInt(npc_prince.style.left) + 5 + 'px';

            }
        }
    }
    if (rightArrowDown) {
        pc.style.left = parseInt(pc.style.left) + 5 + 'px';

        var sideHit = false;
        for (var i = 0; i < platforms.length; i++) {
            if (hittest(pc, platforms[i], i)) {
                sideHit = true;

            }
            //$("#output").html("sideHit = " + sideHit);
            pc.style.left = parseInt(pc.style.left) - 5 + 'px';
            console.log(sideHit);


            if (!sideHit) {
                for (var i = 0; i < platforms.length; i++) {
                    platforms[i].style.left = parseInt(platforms[i].style.left) - 5 + 'px';
                }
                npc_prince.style.left = parseInt(npc_prince.style.left) - 5 + 'px';
            }
        }
    }

    //VERTICAL MOVEMENT
    fallSpeed += GRAVITY;
    pc.style.top = parseInt(pc.style.top) + fallSpeed + 'px';

    for (var i = 0; i < platforms.length; i++) {
        if (hittest(pc, platforms[i], i)) {

            if (fallSpeed < 0) {
                // hit bottom of platform
                pc.style.top = parseInt(platforms[i].style.top) + parseInt(pc.style.height) + 'px';
                fallSpeed *= -1;
            } else {
                // hit top of platform
                pc.style.top = parseInt(platforms[i].style.top) - parseInt(pc.style.height) + 'px';
            }
            if (upArrowDown) {
                fallSpeed = -16; // upward force
            } else {
                fallSpeed = 0;
            }
        }
    }

    if (hittest(pc, npc_prince, i)) {
        clearInterval(gameTimer);
        alert('You saved the prince!');
        if (level == 3) {
        	$("#gameWindow").addClass('msgGameOver');
    		$("#gameWindow").html("<br><br>You win!");
            //gameWindow.innerHTML = '<br><br>You win!';
            //gameWindow.className = 'msgGameOver';
        } else {
            document.getElementById('btnContinue').style.display = 'block';
        }
    } else if (parseInt(pc.style.top) > 400) {
        clearInterval(gameTimer);
        alert('So sad... You fell in a hole.');

        removeLife();
        level--;
        nextLevel();
    }

}

function addLife() {
    numLives++;
    //var life = document.createElement('IMG');
    //life.src = 'heart.png';
    //lifebar.appendChild(life);
    $("#lifebar").append('<img src="heart.png" />');
}

function removeLife() {
    if (numLives > 0) {
        numLives--;
        lifebar.removeChild(lifebar.lastChild);
    } else {
    	$("#gameWindow").addClass('msgGameOver');
    	$("#gameWindow").html("<br><br>You lose!");
        //gameWindow.innerHTML = '<br><br>You lose!';
        //gameWindow.className = 'msgGameOver';
        
    }
}

function nextLevel() {
	
	$("#btnContinue").hide();

    //document.getElementById('btnContinue').style.display = 'none';
    level++;
    $("#output").html("Level " + level);
    //output.innerHTML = level;

    fallSpeed = 0;
    leftArrowDown = false;
    rightArrowDown = false;
    upArrowDown = false;

    pc.style.left = '190px';
    pc.style.top = '50px';

    for (var i = 0; i < platforms.length; i++) {
        gameWindow.removeChild(platforms[i]);
    }
    platforms = new Array();

    if (level == 1) {
        npc_prince.style.left = '750px';
        npc_prince.style.top = '340px';

        addPlatform(0, 380, 500, 20);
        addPlatform(150, 300, 100, 20);
        addPlatform(550, 380, 400, 20);
        addPlatform(400, 300, 100, 100);
        addPlatform(900, 200, 100, 20);
        addPlatform(800, 300, 100, 20);
        addPlatform(1180, 380, 1400, 20);
    } else if (level == 2) {
        npc_prince.style.left = '500px';
        npc_prince.style.top = '340px';

        addPlatform(0, 380, 250, 20);
        addPlatform(300, 380, 250, 20);
        addPlatform(400, 300, 100, 100);
    } else if (level == 3) {
        npc_prince.style.left = '650px';
        npc_prince.style.top = '240px';

        addPlatform(0, 380, 500, 20);
        addPlatform(550, 280, 150, 20);
    }

    gameTimer = setInterval(gameloop, 50);

}
/*
document.addEventListener('keydown', function(event) {
    if (event.keyCode == 37) leftArrowDown = true;
    if (event.keyCode == 39) rightArrowDown = true;
    if (event.keyCode == 38) upArrowDown = true;
});
*/




/*
document.addEventListener('keyup', function(event) {
    if (event.keyCode == 37) leftArrowDown = false;
    if (event.keyCode == 39) rightArrowDown = false;
    if (event.keyCode == 38) upArrowDown = false;
});
*/