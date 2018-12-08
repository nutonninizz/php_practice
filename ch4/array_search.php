<html>
<body>
    <?php
        $number = array('first' => 1, 'second' => 2, 'third' => 3);
        $bookkey = array_search (2,$number);
        if($bookkey)
        {
            echo "ค่า key ของ 2 คือ $bookkey";
        }
    ?>
</body>
</html>