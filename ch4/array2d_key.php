<html>
<body>
    <?php
        $books = array( array(  'code' =>'b001','description'=>'PHP Programming','price'=>295),
                        array(  'code'=>'b002','description'=>'JSP Programming','price'=>275),
                        array(  'code'=>'b003','description'=>'Perl Programing','price'=>325));
        echo $books [0][description];
        echo $books [1][price];
        echo $books [2][code];
    ?>
</body>
</html>