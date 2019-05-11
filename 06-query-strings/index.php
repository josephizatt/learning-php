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
            <?php 
                // Getting the name from the URL
                $name = $_GET['name'];
                
                echo $name
            ?>
        </h1>
        <h1>
            <!-- Shortcut for using PHP and echoing something -->
            <?= "Hello " . $_GET['name']; ?>
        </h1>
        <h1>
            <!-- Security feature htmlspecialchars should be used -->
            <?= "Hello " . htmlspecialchars($_GET['name']); ?>
            <!-- This is called sanitiziing the input -->
        </h1>
    </header>

</body>
</html>