<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Виберіть діапазон, залишилась 1 спроба</h1>
    <form action="page4.php" method="GET">
        <?php
            $victory = json_decode($_GET["victory"]);
            $comp = $_GET["comp"];
            $startRange = $_GET["startRange"];
            $victory [] = $_GET["choose"];
            echo("<select name='choose'>");
            for($i = $startRange; $i <= $startRange + 4; $i++){
                if($victory [1] == $i){
                    echo("<option disabled value=".$i.">$i</option>");
                }   else{
                    echo("<option value=".$i.">$i</option>");
                }
            }
            echo("</select>");
            echo("<p>Комп загадав число - $comp</p>");
            echo("<p>".var_dump($victory)."</p>");
            echo("<p>Чи вгаданий діапазон - $victory[0]</p>");
            echo("<p>Перше число - $victory[1]</p>");
            echo("<p>Початок діапазону - $startRange</p>");


        ?>
            
    <label><input name="comp" type="hidden" value="<?php echo($comp); ?>"></label>
    <label><input name="choose1" type="hidden" value="<?php echo($choose1); ?>"></label>
    <label><input name="choose2" type="hidden" value="<?php echo($choose2); ?>"></label>
    <label><input type="submit" value="Next"></label>

    </form>
</body>
</html>