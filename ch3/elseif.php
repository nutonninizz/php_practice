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
        $grade = "c";
        if($grade == "A")
            echo "ผลการเรียนอยู่ในระดับดีมาก";
        elseif ($grade = "B")
            echo "ผลการเรียนอยู่ในระดับดี";
        elseif ($grade == "C")
            echo "ผลการเรียนอยู่ในระดับปานกลาง";
        elseif ($grade == "D")
            echo "ผลการเียนอยู่ในระดับพอใช้";
        else
            echo "ผลการเรียนอยู่ในระดับต่ำ";
    ?>
</body>
</html>