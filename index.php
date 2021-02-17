<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Виберіть діапазон, залишилось 3 спроби</h1>
    <form action="page2.php" method="GET">
            <select name="choose">
                <?php
                    $comp = rand(1,100);
                    for($number = 1, $number2 = 10; $number <= 100; $number+= 10, $number2+= 10){
                        echo("<option value='".$number."'>$number - $number2</option>");
                    }
                ?>
            </select>
            <input type="hidden" name="comp" value="<?php echo($comp); ?>">
            <input type="submit" value="Зробити спробу">
    </form>

</body>
</html>