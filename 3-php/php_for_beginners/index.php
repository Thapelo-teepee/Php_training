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
                   "releaseYear" => 1968,
                   "purchaseUrl" => "http://example.com"
                ],
                [
                  "name" =>  "Project Hail Mary",
                  "Author" => "Andy Weir",
                  "releaseYear" => 2021,
                   "purchaseUrl" => "http://example.com"
                ]
            ];

         $filterBooks  = function ($items,$fun) {
                $filteredBooks = [];
                foreach ($items as $item) {
                    if($fun($item)) {
                        $filteredBooks[] = $item;
                    }
                }

                return $filteredBooks;
            };

            $filterTheBooks = $filterBooks($books,function($items) {
                return $items['releaseYear'] <= 2000;
            } );
      ?>
     <ul>
        <?php foreach( $filterTheBooks as $book) : ?>
           
                  <a href="<?=$book['purchaseUrl'] ?>">
                    <li><?="$book[name] - Author: ($book[Author])" ?></li>
                  </a>

           
        <?php endforeach; ?>
     </ul>
  
</body>
</html>