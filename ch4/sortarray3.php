<html>
<body>
    <?php
        $lang = array("PHP","ASP.NET","JSP","Perl");
        echo "ก่อนจัดเรียงด้วย sort() <br>";
        foreach($lang as $key => $value)
        {
            echo "$key $value <br>";
        }
        asort($lang);
        echo "<p> หลังจัดเรีนงด้วย sort()<br>";
        foreach($lang as $key => $value)
        {
            echo "$key $value <br>";
        }
    ?>
</body>
</html>