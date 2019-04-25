<?php
/**
 *  This ugly piece of... code helps us with getting names of the songs in the folder
 *
 */
global $songTitle;
$pos = strrpos($_SERVER['REQUEST_URI'], '/');
$title = substr($_SERVER['REQUEST_URI'], $pos+1);

function getSongs(){
    $songs = scandir(root."/model/uploads/music/");
    global $songTitle;
    for($i=2; $i<count($songs); $i++){
        $pos = strrpos($songs[$i], '.');
        $songs[$i] = substr($songs[$i], 0, $pos);
        $songTitle[$i-2] = ($songs[$i]);

    }
return $songTitle;
}

getSongs();

