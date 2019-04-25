<?php

include_once root."/model/services/getsongs.php";

$css = "/view/style/style.css";
$js = "/view/js/script.js";
$song = scandir(root."/model/uploads/music/");

$body = "<a href='/'><button class='btn'>GO HOME</button></a>";

?>

    <audio>
        <source src="/model/uploads/music/<?php echo $song['2']?>" >
    </audio>


<?php $songsNum = count(scandir(root."/model/uploads/music/"))-2;
 for($i=0; $i < $songsNum; $i++):
getSongs();
?>

 <p class="songs">
     <?php echo $songTitle[$i]; ?>
 </p>

     <audio controls>
         <source src="/model/uploads/music/<?php echo $song[$i+2]?>" >
     </audio>

 <br>


<?php endfor; ?>

<h1 class="text">UPLOAD YOUR MP3 SONG! (and refresh your page, lol...) </h1>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="filename" class="btn">
    <input type="submit" name="upload" value="UPLOAD" class="btn">
</form>


<?php
/**
 * You can upload songs, which are less than 2MB, to fix this, check your php.ini
 */
if(is_uploaded_file($_FILES["filename"]["tmp_name"]) && $_FILES["filename"]["type"] == "audio/mp3")
{
    move_uploaded_file($_FILES["filename"]["tmp_name"], root."/model/uploads/music/".$_FILES["filename"]["name"]);
}
else if (count($_FILES)==0)
{
    echo("<p class='text'>No File is uploaded</p>");
}
else
{
    echo("<p class='text'>Error while uploading file!</p>");
}


?>

<?php include_once "basic_template.php"; ?>
