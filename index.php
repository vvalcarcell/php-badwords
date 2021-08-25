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
$textLength = strlen($text);
echo "<div>{$text}</div> <div>$textLength</div> </br>";

$getParameter= $_GET['word'];
$censoredText = str_replace($getParameter, '***', $text);
$censoredTextLength = strlen($censoredText);
echo "<div>{$censoredText}</div> <div>$censoredTextLength</div>";
?>


</body>
</html>