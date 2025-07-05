<?php
// 1. start collecting user input 
$fullname= $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$mobile = $_POST['phone'];

// 2. connect to database and validate connection
$conn = new mysqli('localhost', 'root', '', 'nacom');
if ($conn -> connect_error) {
    die('Connection Failed: ' .$conn -> connect_error);
    
} else {
    
    // 3. prepare and execute the SQL statement
    $stmt = $conn -> prepare('INSERT INTO registration1 (fullname, email, username, password, gender,dob,mobile) 
    VALUES (?, ?, ?, ?, ?,?,?)');
    
    // 4. Bind Parameters (all are strings)
    //$stnt -> bind_param('sid', $name, $quantity, $cost);

    $stmt -> bind_param("sssssss", $fullname, $email, $username, $password, $gender,$date_of_birth,$phone);

    // 5. Execute the statement 
    if ($stmt -> execute()) {
        echo 'Registration is successful.';
        
    }else {
        echo 'Error: ' . $stmt-> error;
        exit;
    }
    ;
    // 5. close the statement and connection
    $stmt -> close();
    $conn ->close();
}
?>