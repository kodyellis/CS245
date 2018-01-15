<!DOCTYPE html>
<html>
    <head>
         <link href="index.css" type="text/css" rel="stylesheet" />
    </head>
<body>
    <h1>My Favorite Web Sites</h1>

    <?php
         $text = file("webFavorites.txt");

foreach ($text as $lineCounter) {
    print "<li><a href = $lineCounter>$lineCounter</a></li>\n";
}

   ?>
    <h1>My Favorite Videos/MP3s</h1>

<ul>
<li><a href = "https://www.youtube.com/watch?v=q6EoRBvdVPQ"> Yee</a></li>
<li><a href = "https://www.youtube.com/watch?v=YlEb3L1PIco"> Mystery Skulls</a></li>
<li><a href = "https://www.youtube.com/watch?v=VTI3QS-BsBk">Goku vs Jiren Full Fight[Dragon Ball Super ENG SUB] [4K HD]</a></li>
</ul>

    <h1>Pic of the Day</h1>
    <?php

    $pic_rand = mt_rand(1,3);

     $picX = "error";

    if($pic_rand == 1){
         $picX = "boondocks_huey.png";
    }
    elseif($pic_rand == 2){
         $picX = "red-tint-night-road-glowing-lights-bokeh-speed-lines.jpg";
    }
    elseif($pic_rand == 3){
         $picX = "chris.jpg";
    }

    ?>

    <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />
    <br />
   <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />
    <img src ="<?php echo $picX; ?>" />


    </body>

</html>
