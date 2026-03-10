<?php
$nothing = "<h1 style=' color: red'>Nothing</h1>";
$to = "<h2 style=' color: orange'>to</h2>";
$see = "<h3 style=' color: green'>see</h3>";
$here = "<h4 style=' color: purple'>here.</h4>";

$color = 'blue';

$text = "<h1 style= 'color: $color'>"; 
$text .= "Nothing to see here."; //.= 결합하는것
$text .= "</h1> ";

echo $text;
echo $nothing . ' '. $to .' '. $see .' '. $here;
?>
<!Doctype html>
<html>
<head>
    <title>😁Aron's php page!</title>
</head>   
<body>
    <h1 style="front - size: 48pt">
        Nothing to see here!
        <?= $text ?>
        <h1>
</body>
</html>