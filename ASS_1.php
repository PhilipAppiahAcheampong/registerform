<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //learning how to print our first message in PHP
    print "<h1>Hello, World!.</h1> <br> ";
    echo "Welcome to the Learning Hub <br> ";

// Variables in PHP
    $str = "Akwaba Ghana";
    $name ="Philip jnr"; 
    $x = 150;
   //how to display variables in PHP
   echo"$str <br/>";
   echo"my name is $name <br/>";

   
   //how to connect php database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lnrhub";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }     
    echo "Connected successfully <br/>";      

   


    ?>
    
</body>
</html>