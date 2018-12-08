<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="summit.php" method="post">
        name: <input type="text" name="name"><br>
        surname: <input type="text" name="surname"><br>
        
        what is your province?
        <select id="province" name="province">                      
            <option value="0">--Select provice--</option>
            <option value="DMK">DMK</option>
            <option value="CEI">CEI</option>
            <option value="NYX">NYX</option>
        </select>
    <p>
    <input type="submit">
    </form>
</body>
</html>