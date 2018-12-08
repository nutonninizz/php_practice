<html>
<body>
    <?php
        $lang = array ("PHP","ASP.NET","JSP","Perl");
        echo "ก่อนจัดเรียงด้วย sort() <br>";
        foreach($lang as $key => $value)
        {
            echo "$key $value <br>";
        }
        sort($lang);
        echo "<p>หลังจัดเรียงด้วย sort() <br>";
        foreach($lang as $key => $value)
        {
            echo "$key $value <br>";
        }
    ?>
</body>
</html>