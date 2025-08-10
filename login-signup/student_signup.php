<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $college_id = $_POST['college_id'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (name, college_id, email, password)
            VALUES ('$name', '$college_id', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Student account created successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
