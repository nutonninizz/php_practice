<html>
<body>
    <?php
        $lang = array ('first'=>'PHP','second'=>'ASP.NET','third'=>'JSP','fourth'=>'Perl');
        echo "before sort() <br>";
        foreach ($lang as $key => $value) {
            echo "$key $value<br>";
        }
        ksort($lang);
        echo "<p>after sor()<br>";
        foreach ($lang as $key => $value) {
            echo "$key $value <br>";
        }
    ?>
</body>
</html>