<?php

if (isset($_GET['color']) && $_GET['color'] == 1) {
    $color = 'red'; 
}
else {
    $color = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nr1</title>
</head>
<body style="background:<?= $color ?>;">

<a href="http://localhost/bit/nd1/webm/color.php">Black</a>
<a href="http://localhost/bit/nd1/webm/color.php?color=1">Red</a>

</body>
</html>