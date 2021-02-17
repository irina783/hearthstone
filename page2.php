<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $startRange;
        $victory = [];
        $comp = $_GET["comp"];
        $myStartRange = $_GET["choose"];
        $myEndRange = $myStartRange + 9;
        if ($myEndRange >= $comp && $myStartRange <= $comp){
            echo ("<h1>ВІТАЄМО, ВИ ВГАДАЛИ ДІАПАЗОН</h1>");
            $startRange = $myStartRange;
            $victory [] = 1;
        } else{
            echo ("<p>На жаль, Ви не вгадали, спробуйте ще раз</p>");
            $victory [] = 0;
            for($i = 91; $i >= 1; $i -= 10){
                if($comp >= $i){
                    $startRange = $i;
                    break;
                }
            }
        }
        echo("<form action='page3.php' method='GET'>"); 
        echo("<select name='choose'>");
        for($i = $startRange; $i <= $startRange + 9; $i++){
            echo("<option value='".$i."'>$i</option>");
        }
        echo("</select>");

    ?>
    <label><input name="victory" type="hidden" value="<?php echo(json_encode($victory)); ?>"></label>
    <label><input name="startRange" type="hidden" value="<?php echo($startRange); ?>"></label>
    <label><input name="comp" type="hidden" value="<?php echo($comp); ?>"></label>
    <label><input type="submit" value="Next"></label>
    </form>
</body>
</html>