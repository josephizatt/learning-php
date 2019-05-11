<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: grey;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>

        <br>
        
        <?php
            foreach($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>

</body>
</html>