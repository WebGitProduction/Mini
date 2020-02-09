<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>
<body>
    <header>Hello and Watch</header>
<?php
$name = array("Iphone","Macos","Generator","Lorem","PC","Underpants","Poop","Halobo",
              "Jambo","Socs","Laptop","bear","mark","development","smash","hope","smashm"
              ,"Jambo","Socs","Laptop","bear","mark","development","smash","hope","smashma","Lorem"
              ,"Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
              ,"Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem","Lorem"
);
$price = array(12,324,64,43,645,3123,2131
 ,132,312,312,312,31,23,123,1,23,123,12,312
 ,123,123,12,31,23,123,12,31,23,12,312,312,3,123
 ,123,12,312,312,312,3,234,23,423,4,234,3,42,34,23,4
 ,34,234,23,423,4,234,23,423,4,234,23,4,234,234,23424,
 23,423,423,423,23,42,34,23,423,4,234,234,2,34,23,
 23,4,23,42,34,23,4,32,423,4,23,4,234,4,234,234,2342
 ,23,42,34,234,23,423,4,234,23,4,234,23,423423,23,42
);
 for($i=0;$i<84;$i++){
     echo " <div class='block'>
     <div class='name'>$name[$i]</div>
     <div class='space'></div>
     <div class='number'>Price:$price[$i]$</div>
    </div>";
 }
?>
<footer>Thank you for watching</footer>
</body>
</html>