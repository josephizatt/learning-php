<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tasks</h1>
    <ul>
        <li>
            <strong>Name: </strong> <?=ucwords($task['title']);?>
        </li>
        <li>
            <strong>Due: </strong> <?=ucwords($task['due']);?>
        </li>
        <li>
            <strong>Person responsible: </strong> <?=ucwords($task['assigned_to']);?>
        </li>
        <li>

            <strong>Completed: </strong>

            <!-- <?=$task['completed'] ? 'Finished' : 'Incomplete';?> -->


            <?php

                if (! $task['completed']) {

                    echo 'Incomplete';
                }


            ?>





            <?php if($task['completed']) : ?>
            
                <span class="icon">&#9989</span>

            <?php else : ?>

                <span class="icon">Incomplete</span>

            <?php endif; ?>
        </li>
    </ul>
</body>
</html>