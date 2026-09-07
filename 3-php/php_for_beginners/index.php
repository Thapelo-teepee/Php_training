
 <?php


  // number  type 
     $status = "404";
  // string type
  $text = 'Teepee $status';

  // we can also do something called casting (type casting):

   $casting = (string) "404";


 // we have two type of arrays in php (Numeric Arrays) and (Associative Arrays)

    // Numeric arrays

    $colors = [ 'red', 'blue', 'green' ];

    // Associative Arrays
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

   // function with a default value
//    $greet = function ($name = "Teepee") {
        
//         echo "Hello $name";
//     };
     
    

   // Loops in php:

     // foreach loops
    //  $invoiceItems = [
    //     ['item' => 'Laptop', 'price' => 1200],
    //     ['item' => 'Mouse', 'price' => 75],
    //     ['item' => 'Keyboard', 'price' => 100] 
    //  ];


    // $totalprice = 0;
    // foreach($invoiceItems as $item) {

    //     $totalprice += $item['price'];
       
    // }

    // var_dump($totalprice);

    // for loop
    // for($i = 0; $i <= 3; $i++) {
    //     echo "Hello There!!";
    // }

    // while loop
     $count = 0;
    // while($count < 5) {
    //     var_dump($count);
    //     $count++;
    // }

    // Do while loop 
    // do { 
    //     echo "This is a do while!";
    //       $count++;
    // } while($count < 5);

    // PhP classes 

     class User {
        public string $Name;  
        public string $Email;
        // TODO heap array
     }

 $userObj = new User;
 $userObj->Name = "Thapelo";
 $userObj->Email = "nobatana.thapelo@stratusolve.com";

 $kvpArray = (array)$userObj;
 $object = $userObj;

 $cloneobject = clone $userObj;
 $object->Name = "tEEPEE";

 file_put_contents('Teepee.txt', json_encode($userObj). '' . json_encode($cloneobject). '' . json_encode($kvpArray));
 require "index.view.php";

 ?>
