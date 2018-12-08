<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php  
        for($x=1;$x<=12;$x++)
        {
            echo "5 x ".$x." = ".($x*5)." <br>";
            echo "".$x." x 5 = ".($x*5)." <br>";
        }

    ?>
</body>
</html>