<?php
class Song
{
    public $songId;
    public $title;
}

$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "Octopus's Garden";
var_dump($octopusSong);

class Playlist 
{
    public $name;
    public $songs = [];

    public function addSong($song) {
        $this->songs[] = $song;
    }
}

$yellowSubmarine = new Song();
$yellowSubmarine->songId = 2;
$yellowSubmarine->title = "Yellow Submarine";

$myPlaylist = new Playlist();
echo "<br>";
var_dump($myPlaylist);
$myPlaylist->name = "Rock!";
$myPlaylist->addSong($octopusSong);
$myPlaylist->addSong($yellowSubmarine);
echo "<br>";
var_dump($myPlaylist);
echo "<br>";
var_dump($myPlaylist->songs);





/* object(Song)#1 (2) { ["songId"]=> int(1) ["title"]=> string(16) "Octopus's Garden" }
object(Playlist)#3 (2) { ["name"]=> NULL ["songs"]=> array(0) { } }
object(Playlist)#3 (2) { ["name"]=> string(5) "Rock!" ["songs"]=> array(2) { [0]=> object(Song)#1 (2) { ["songId"]=> int(1) ["title"]=> string(16) "Octopus's Garden" } [1]=> object(Song)#2 (2) { ["songId"]=> int(2) ["title"]=> string(16) "Yellow Submarine" } } }
array(2) { [0]=> object(Song)#1 (2) { ["songId"]=> int(1) ["title"]=> string(16) "Octopus's Garden" } [1]=> object(Song)#2 (2) { ["songId"]=> int(2) ["title"]=> string(16) "Yellow Submarine" } } */