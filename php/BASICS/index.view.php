<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracasts</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align : center;
        }
    </style>
</head>
<body>
    
    <header>
        <ul>
            <?php
                foreach($names as $name) {
                    echo "<li>$name</li>";
                }
            ?>
        </ul>
    </header>

    <ul>
        <?php foreach($names as $name) : ?>
            <li><?= $name; ?></li>
            <?php endforeach; ?>            
    </ul>

    <ul>
        <?php foreach($person as $feature => $val) : ?>
            <li><strong><?= $feature; ?></strong> <?= $val; ?></li>
            <?php endforeach; ?>            
    </ul>


</body>
</html>