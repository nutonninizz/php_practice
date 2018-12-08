<html>
<body>
    <?php
        $computer = array(  'os'          =>  array('Windows','Lunux','Solaris'),
                            'language'    =>  array('PHP','JSP','Perl'),
                            'vender'      =>  array('Dell','HP','IBM'));
        $provice = array(   'Bangkok'     =>  array('population' => 50000, 'area' => 4000),
                            'Yala'        =>  array('population' => 15000,'area'=> 5000));
        echo $computer["os"][1];
    ?>
</body>
</html>