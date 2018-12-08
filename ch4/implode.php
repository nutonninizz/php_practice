<html>
<body>
    <?php
        $os = array ('Linux','Wondows','Solaris','Unix');
        $osnew1 = implode('=', $os);
        $osnew2 = implode(', ',$os);
        echo "$osnew1 <br>";
        echo "$osnew2 <br>";
    ?>
</body>
</html>