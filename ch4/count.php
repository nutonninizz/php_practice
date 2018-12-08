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
    <?
        $lang = array (0 => "PHP", 1 => "ASP.NET", 2=> "JSP", 3 => "Perl");
        $total = count($lang);
        echo "มีสมาชิกใน array ทั้งหมด $total สมาชิก";
    ?>

</body>
</html>