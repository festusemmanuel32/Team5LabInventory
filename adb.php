var randomLoc = Math.floor(Math.random() * 5);
var location1 = randomLoc;
var location2 = location1 + 1;
var location3 = location1 + 2;
var guess;
var hits = 0;
var guesses = 0;
var isSunk = false;

function game(playhere,buttonid)
{
    guess = playhere;    
    guesses = guesses + 1;
    //alert("You Clicked 0");
    //document.getElementById("putmedown").innerHTML="You've Clicked" + " " + playhere;
    if (guesses == 5)
    {
        //alert("You have run out of guesses. Game over. You Lost.");
        document.getElementById("letmedie").innerHTML="You have run out of guesses. Game over. You Lost.";

        endGane();
    }
    else
    {
        document.getElementById(buttonid).disabled = true;
        playgame(buttonid);
    }
}
    
function playgame(buttonid){
    if (guess == location1 || guess == location2 || guess == location3) {
            //alert("HIT!");
            document.getElementById(buttonid).innerHTML="HIT!";

            hits = hits + 1;
            if (hits == 3) {
                isSunk = true;
                //alert("You sank my battleship!");
                endGane();
                document.getElementById("letmedie").innerHTML="You sank my battleship!";
            }
        } else {
            //alert("MISS");
            document.getElementById(buttonid).innerHTML="MISS";

        }
}
function restartg()
window.location="battleship.html";
{

}

function endGane(){
    document.getElementById("locone").disabled = true;
    document.getElementById("lacatwo").disabled = true;
    document.getElementById("lacathree").disabled = true;
    document.getElementById("lacafour").disabled = true;
    document.getElementById("lacafive").disabled = true;
    document.getElementById("lacasix").disabled = true;
    document.getElementById("lacasev").disabled = true;    
    showstat();
}

function showstat(){
    var stats = "You took " + guesses + " guesses to sink the battleship, " +
            "which means your shooting accuracy was " + (3/guesses);
            document.getElementById("putmedown").innerHTML=stats;
    //alert(stats);
}
