<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP for Beginners</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
             <?php

            $books = [
                "Project Hail Mary", 
                "The Langoliers", 
                "Do Androids Dream of Electronic "
            ];
        ?>
     <ul>
        <?php foreach($books as $book) : ?>
            <li><?=$book ?></li>
        <?php endforeach; ?>
     </ul>
</body>
</html>