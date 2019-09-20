<?php
    require_once('./lib/h1.php');
    require_once('./lib/p.php');

    $title = new H1('My first PHP Website');
    $introduction[] = new P('lorem ipsum');
    $introduction[] = new P('dolorem sitat');
    $introduction[] = new P('amet hihi haha');
    $introduction[] = new P();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo $title ?>
    <?php foreach ($introduction as $paragraph) {
        echo $paragraph;
    } ?>
</body>
</html>