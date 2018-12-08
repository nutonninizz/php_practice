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
        class example1
        {
            function __construct($param)
            {
                echo "คอนสตรักเตอร์ถูกเรียกให้ทำงานอัตโนมัติ ได้รับพารามิเตอร์ = $param <br>";
            }
        }
        //ประกาศ object
        $ob1 = new example1("Red");
        $ob2 = new example1("Blue");
    ?>
</body>
</html>