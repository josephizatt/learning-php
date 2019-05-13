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
    <header>
        <h1>
            <!-- Put some PHP in a HTML file -->
            <?php 
                $name = 'John';
                
                echo $name
                // Make sure to end the PHP
            ?>
        </h1>
    </header>

</body>
</html>