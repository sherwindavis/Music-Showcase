<?php
session_start();
if($_SESSION["pass"]){
    unset($_SESSION["pass"]);
    
}
else{    
    header('Location: index.php');
    exit;   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#72acf5" />
    <title>Music</title>
    <link rel="icon" href="./assets/favicon.png" type="image/icon type">
</head>
<body>

    <div id = "bg"></div>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
<link rel="stylesheet" href ="style.css?ver=<?php echo rand(111,999)?>"> 
<audio src="./assets/music/belgium.mp3" type="audio/mpeg" id="song"></audio>

<div class="card1">
<div id = "tracks1" onclick="loadtrack(1);">  
<img src="./assets/cover/gbgr.jpg"id= showcasecover>
<strong><p  id="song"> Used To</p></strong>
<p id="artist"> Juice Wrld</p>
<p id="album">Goodbye & Good Riddance</p>
</div>

<div id = "tracks2" onclick="loadtrack(2)">
<img src="./assets/cover/PerfectTiming.jpg"id= showcasecover>
<strong><p  id="song"> Perfect Timing (Intro)</p></strong>
<p id="artist">Nav & Metro Boomin</p>
<p id="album">Perfect Timing</p></div>

<div id = "tracks3" onclick="loadtrack(3)">
<img src="./assets/cover/PBX1.jpg"id= showcasecover>
<strong><p  id="song"> Death Route</p></strong>
<p id="artist">Sidhu Moosewala</p>
<p id="album">PBX 1</p></div>

<div id = "tracks4" onclick="loadtrack(4)">
<img src="./assets/cover/luvisrage2.jpg"id= showcasecover>
<strong><p  id="song">The Way Life Goes</p></strong>
<p id="artist">Lil Uzi Vert</p>
<p id="album">LUV is Rage 2</p></div>

<div id = "tracks5" onclick="loadtrack(5)">
<img src="./assets/cover/JackBoys.png"id= showcasecover>
<strong><p  id="song">GANG GANG</p></strong>
<p id="artist">JACKBOYS feat. Sheck Wes, Don Toliver, Luxury Tax 50 & Cactus Jack</p>
<p id="album">JACKBOYS</p></div>

<div id = "tracks6" onclick="loadtrack(6)">
<img src="./assets/cover/17.jpg"id= showcasecover>
<strong><p  id="song"> Everybody Dies In Their Nightmares</p></strong>
<p id="artist">XXXTENTACION</p>
<p id="album">17</p></div>

<div id = "tracks7" onclick="loadtrack(7)">
<img src="./assets/cover/r90210.jpg"id= showcasecover>
<strong><p  id="song"> 90210</p></strong>
<p id="artist">Travis Scott ft. Kacy Hill</p>
<p id="album">Rodeo</p></div>

<div id = "tracks8" onclick="loadtrack(8)">
<img src="./assets/cover/swang.jpg"id= showcasecover>
<strong><p  id="song">Swang</p></strong>
<p id="artist">Rae Sremmurd</p>
<p id="album">SremmLife 2</p></div>

<div id = "tracks9" onclick="loadtrack(9)">
<img src="./assets/cover/savage.png"id= showcasecover>
<strong><p  id="song">ALWAYS DO</p></strong>
<p id="artist">The Kid LAROI</p>
<p id="album">SAVAGE</p></div>

<div id = "tracks10" onclick="loadtrack(10)">
<img src="./assets/cover/passionfruit.jpg"id= showcasecover>
<strong><p  id="song"> Passionfruit</p></strong>
<p id="artist">Drake</p>
<p id="album">More Life</p></div>

</div>

<div class="container">

    <img src="./assets/cover/belgium.jpg" id="thumbnail" />
    <strong><div class="song-title">Belgium</div></strong>
    <div class="song-artist">Lil Peep</div>
    <img src="./assets/components/previous.png" onclick="previousSong()" 
    id="previous-song" />
    <img src="./assets/components/play.png" onclick="PlayPause()"     
    id="play" />   
    <img src="./assets/components/next.png" onclick="nextSong()"
    id="next-song" />
  </div>
  <div id='overlay'>
  <div id="welcome">
      <strong><p1 id="gen"> Welcome <?php print($_SESSION['name']); ?> ! </p1> </strong>
      <div id ='bcontinue' onclick=butcontinue()><p2 id = "gen2">Continue > </p2><div>
    </div> 
</div>
 <script src="player.js"></script>
</body>
</html>