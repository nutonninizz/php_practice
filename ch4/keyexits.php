<html>
<body>
    <?php
        $number = array('first' => 1, 'second' => 2, 'third' => 3);
        if(array_key_exists('second',$number))
        {
            echo "The 'second' element is in \$number array <br>"; 
        }
        $book = array('PHP', 'JSP', 'ASP.NET', 'Perl');
        if(array_key_exists(3,$book))
        {
            echo "The '3' element is in \$book array";
        }
    ?>
</body>
</html>