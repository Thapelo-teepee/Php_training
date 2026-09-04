
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

   require "index.view.php";
 ?>

