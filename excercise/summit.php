<?php
    require_once 'class/information.php';
    $info = new Information($_REQUEST);
    //TODO use $info.insert();
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "practice_php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully<br/>";
?>


<?php
    if(isset($_REQUEST['name'], $_REQUEST['surname'], $_REQUEST['province']))
    {
        $sql = "INSERT INTO information (name, surname, province)
        VALUES ('".$_REQUEST["name"]."','".$_REQUEST["surname"]."','".$_REQUEST["province"]."')";

        if($conn->query($sql) === TRUE){
            echo 'New record created successfully';
        }else{
            echo 'Error:'.$sql.'<br/>'.$conn->error;
        }
    }
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Summit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        //Displays the data that was received from the input box named name in the form
        echo "<p>".$info->toString();
    ?>
</body>
</html>