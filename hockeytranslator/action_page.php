<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<title>Hockey Translator</title>
<link rel="stylesheet" href="files/stylesheet.css">
<script>

	</script> 

</head>

<body>


<header>
	<nav id="dropdown">
		<ul>
  			<li class="dropbox">
<a href="index.html">
	<img src="" class="logo" href="index.html" >
</a> 
		<ul>
      		<li>
      			<a href="translator.html">Translator</a>
      		</li>
      		<li>
      			<a href="dictionary.html">Dictionary</a>
      		</li>
      		
      		</ul>
		</ul>
      </nav>
        
 
<a href="index.html" class="headertext"> Hockey Translator</a>


</header>

<center>
<br>
<br>
<script>
function myFunction() {
    var str = document.getElementById("demo").innerHTML; 
    var res = str.replace("puck", "biscuit")
	.replace("rink", "barn")
	.replace("ankles", "bender")
	.replace("Rink", "Barn")
	.replace("Ankles", "Bender")
	.replace("assist", "apple")
	.replace("Assist", "Apple")
	.replace("nice", "beaut")
	.replace("beautiful", "beaut")
	.replace("Nice", "Beaut")
	.replace("Beautiful", "Beaut")
	.replace("good", "beaut")
	.replace("Good", "Beaut")
	.replace("I love you", "I'm gay")
	.replace("i love you", "i'm gay")
	.replace("game", "barn burner")
	.replace("hair", "salad")
	.replace("Hair", "Salad")
	.replace("crossbar down", "bardownski")
	.replace("Crossbar down", "Bardownski")
	.replace("bad", "Bender")
	.replace("Bad", "Bender")
	.replace("chest", "bread basket")
	.replace("Chest", "Bread Basket")
	.replace("helmet", "bucket")
	.replace("Helmet", "Bucket")
	.replace("celebration", "celly")
	.replace("Celebration", "Celly")
	.replace("nhl", "chel")
	.replace("NHL", "Chel")
	.replace("Nhl", "Chel")
	.replace("teeth", "chiclets")
	.replace("Teeth", "Chiclets")
	.replace("trash", "chirp")
	.replace("Trash", "Chirp")
	.replace("Trash talk", "Chirp")
	.replace("trash talk", "chirp")
	.replace("Trash Talk", "Chirp")
	.replace("slapshot", "clapper")
	.replace("Slapshot", "Clapper")
	.replace("plastic", "fishbowl")
	.replace("Plastic", "Fishbowl")
	.replace("shield", "fishbowl")
	.replace("Shield", "Fishbowl")
	.replace("tobacco", "dinger")
	.replace("Tobacco", "Dinger")
	.replace("cigarette", "dinger")
	.replace("Cigarette", "Dinger")
	.replace("cig", "dinger")
	.replace("Cig", "Dinger")
	.replace("sacrifice", "for the boys")
	.replace("Sacrifice", "For the Boys")
	.replace("goal", "gino")
	.replace("Goal", "Gino")
	.replace("point", "gino")
	.replace("Point", "Gino")
	.replace("crazy", "gongshow")
	.replace("Crazy", "Gongshow")
	.replace("physical", "grinder")
	.replace("Physical", "Grinder")
	.replace("loser", "hoser")
	.replace("Loser", "Hoser")
	.replace("mustache", "lip sweater")
	.replace("Mustache", "Lip Sweater")
	.replace("hand", "mitt")
	.replace("Hand", "Mitt")
	.replace("hands", "mitts")
	.replace("Hands", "Mitts")
	.replace("terrible", "pigeon")
	.replace("Terrible", "Pigeon")
	.replace("dirty", "plumber")
	.replace("Dirty", "Plumber")
	.replace("hard work", "plumber")
	.replace("hard worker", "plumber")
	.replace("Hard worker", "Plumber")
	.replace("Hard Worker", "Plumber")
	.replace("Hard Work", "Plumber")
	.replace("Hard work", "Plumber")
	.replace("slow", "pylon")
	.replace("Slow", "Pylon")
	.replace("female", "rocket")
	.replace("Female", "Rocket")
	.replace("girl", "rocket")
	.replace("Girl", "Rocket")
	.replace("woman", "rocket")
	.replace("Woman", "Rocket")
	.replace("bench", "ride the pine")
	.replace("Bench", "Ride the Pine")
	.replace("pass", "sauce")
	.replace("Pass", "Sauce")
	.replace("goalie", "sieve")
	.replace("Goalie", "Sieve")
	.replace("throw", "sauce")
	.replace("Throw", "Sauce")
	.replace("pick up", "wheeling")
	.replace("Pick up", "Wheeling")
	.replace("Pick Up", "Wheeling")
	.replace("stick", "twig")
	.replace("Stick", "Twig")
	.replace("Hockey", "The Game")
	.replace("hockey", "the game")
	.replace("middle", "mid")
	.replace("Middle", "Mid Pickle")
	.replace("mid", "mid pickle")
	.replace("Mid", "Mid Pickle")
	.replace("top", "top cheese")
	.replace("Top", "Top Cheese")
	.replace("bottom", "bottom toast")
	.replace("Bottom", "Bottom Toast")
	.replace("girls", "rockets")
	.replace("Girls", "Rockets")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("", "")
	.replace("top", "bardownski");
    document.getElementById("demo").innerHTML = res;
}
</script>

<html>
<body onload="myFunction()">
<br>
<br>
<br>
<br>
<br>
<br>

<center><div class="p-normal" style="font-size: 36px; color: black;">Original Text:</div></center>

<div class="p-normal" style="font-size: 32px;">
<?php echo $_POST["name"]; ?>
</div>

<br>

<div class="p-normal" style="font-size: 36px; color: black;">Translation:</div>
<div id="demo" class="p-normal" style="font-size: 32px;">
<?php echo $_POST["name"]; ?><br>
</div>

</body>
</html>


