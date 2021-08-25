<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis dolorem neque expedita laborum. Pariatur ducimus voluptatum perferendis quidem nulla omnis fugit autem. Rem cum rerum minus placeat perspiciatis. Aspernatur, soluta!";
echo "<div>{$text}</div></br>";

$censoredText = str_replace(['laborum','Rem','ipsum'], '***', $text);
echo "<div>{$censoredText}</div>";
?>


</body>
</html>