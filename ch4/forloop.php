<html>
<body>
    <?php
        $info = array('Windows XP', 'PHP', 5, 'Apache', 'MySAL');
        echo "<table border=1 cellpadding=2 cellspacing=0>";
        for($i=0; $i<count($info); $i++)
        {
            echo "<tr><td>ข้อมูลลำดับที่ $i คือ $info[$i]</td></tr>";
        }
        echo "</table>";
    ?>    
</body>
</html>