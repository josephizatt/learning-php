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
        <!-- Accessing items of an array with a foreach loop in PHP -->
        <!-- Notice the use of : which is an alternative syntax for control structures
        i.e. if, while, for, foreach, switch 
        
        https://php.net/manual/en/control-structures.alternative-syntax.php
        
         -->
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
            <!-- End the loop with endforeach -->
        <?php endforeach; ?>
        

        <br>
        <!-- Another way of doing it -->
        <?php
            foreach($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>

</body>
</html>