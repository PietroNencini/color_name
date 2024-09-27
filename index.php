<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome colorato</title>
</head>
<body>
    
    <?php
        $rgb_red = rand(0, 255); 
        $rgb_green = rand(0, 255); 
        $rgb_blue = rand(0, 255); 
        $color = "rgb($rgb_red, $rgb_green, $rgb_blue)";
        $name = "Pietro";

        echo "<h1 style='color: $color;'> $name </h1>"
    ?>

</body>
</html>