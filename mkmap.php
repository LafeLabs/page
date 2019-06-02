<?php
//mkmap.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir

mkdir($dirname);

copy("https://raw.githubusercontent.com/LafeLabs/mapfactory5/master/php/replicator.txt",$dirname."/replicator.php");

echo "<a href = \"$dirname\">".$dirname."</a>"
?>
<style>
    a{
        font-size:3em;
    }
</style>