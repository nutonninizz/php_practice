<html>
<body>
    <?php
        $info = array ('system' => 'Window XP',
                        'langage' => 'PHP',
                        'version' => 5,
                        'server' => 'Apache',
                        'database' => 'MySQL');
        echo "<table border=1 cellpadding=2 cellspacing = 0>";
        foreach($info as $key => $val){
            echo "<tr><td>$key</td><td>$val</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>