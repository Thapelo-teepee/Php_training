<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
     <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
                .list {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .list h4 {
            margin: 0;
        }
     </style>
</head>
<body>
    <div class="container">
       <div class="form">
           <form method="post">
             <input id="input" type="number"
             name="number" min="1" max="10" required>

             <button type="submit">Submit</button>
           </form>
       </div>
       <div class="list">
           <?php foreach($Fibos as $fibo) : ?>

            <h4><?php echo "{$fibo},"; ?></h4>
            <?php endforeach ?>
       </div>
    </div>

</body>
</html>