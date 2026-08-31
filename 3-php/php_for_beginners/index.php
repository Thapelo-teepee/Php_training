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
                [
                   "name" => "Do androids Dream of Electric Sheep",
                   "Author" => "Philip K. Dick",
                   "purchaseUrl" => "http://example.com"
                ],
                [
                  "name" =>  "Project Hail Mary",
                  "Author" => "Andy Weir",
                   "purchaseUrl" => "http://example.com"
                ]
            ];
        ?>
     <ul>
        <?php foreach($books as $book) : ?>

            <a href="<?=$book["purchaseUrl"] ?>">
                 <li><?="$book[name] - Author: ($book[Author])" ?></li>
            </a>
           
        <?php endforeach; ?>
     </ul>
</body>
</html>