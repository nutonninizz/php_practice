<html>
<body>
    <?php
    $number = array ('first' => 1, 'second' => 2, 'third' => 3);
    if(in_array(2,$number))
    {
        echo "The '2' value is in \$number array. <br>";
    }
    $book = array ('PHP','JSP','ASP.NET','Perl');
    if(in_array('PHP',$book))
    {
        echo "The 'PHP' value is in \$books array";
    }
    ?>
</body>
</html>