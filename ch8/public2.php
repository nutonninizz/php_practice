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
        class Person
        {
            private $name;
            public function setName($name)
            {
                $this -> name = $name;
            }
            public function getName()
            {
                return $this -> name;
            }
        }
        $john = new Person();
        $john -> setName ("John Smith");
        echo $john -> getName();
    ?>
</body>
</html>