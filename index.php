<?php

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, perferendis labore. Corporis, impedit qui earum fugit maiores consequuntur esse porro iusto iure omnis, ullam accusantium enim distinctio cupiditate, praesentium vero. Vitae totam eius sit quasi quae animi, libero tempore dignissimos officiis nam itaque dicta ipsum voluptatum quidem magnam fugit ratione eos!';

$words_array = explode(" ", $text);



//this works
$badword = $_GET["badword"];

$edited_text = str_replace($badword, '***', $text);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $edited_text ?> </p>
    
    

    <!-- this works too -->
    <!-- <p>
        <?php 
            // echo str_replace($_GET["badword"], '***', $text) 
        ?> 
    </p> -->

    <p>This paragraph is made of <?php echo count($words_array) ?> words and <?php echo strlen($text) ?> characters.</p>
</body>
</html>