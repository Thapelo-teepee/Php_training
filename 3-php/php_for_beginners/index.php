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

            $bookname = "Dark matter.";
            $isread = false;

             if($isread) {
                $message =  "you have read $bookname";
             } else {
                $message = "you have not read $bookname";
             }
        ?>
    <h1>

        <?php echo $message ?>
    </h1>
</body>
</html>