<?php
    require_once('./lib/h1.php');
    require_once('./lib/p.php');
    require_once('./lib/hr.php');
    require_once('./lib/br.php');
    require_once('./lib/img.php');

    $link = 'https://pics.me.me/learns-to-program-learned-php-poor-soul-34365219.png';

    $title = new H1('My first PHP Website', ['id' => 'title', 'style' => 'background-color: yellow;']);
    $introduction[] = new P('lorem ipsum', ['style' => 'color: blue;']);
    $introduction[] = new BR();
    $introduction[] = new P('dolorem sitat');
    $introduction[] = new HR();
    $introduction[] = new P('amet hihi haha');
    $introduction[] = new P();
    $introduction[] = new Img(['src' => $link]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>
<body>
    <?php echo $title ?>
    <?php foreach ($introduction as $paragraph) {
        echo $paragraph;
    } ?>
</body>
</html>