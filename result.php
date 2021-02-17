<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Result</h1>
    <?php
        $choose1 = $_GET["choose1"];
        $choose2 = $_GET["choose2"];
        $choose3 = $_GET["choose3"];
        echo ("Your number: ".$choose1." ".$choose2." ".$choose3."<br>);
        $comp = $_GET["comp"];
        if ($choose3 == $comp){
            echo("victory");
        }else echo("You lose");
    ?>
    <form action="page3.php" method="GET">
        <label><input type="submit" value="Back"></label>
    </form>
    
</body>
</html>