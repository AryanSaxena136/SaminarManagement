<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $college_id = $_POST['college_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE college_id = '$college_id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome, " . $row['name'];
            // You can start a session here
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "College ID not found!";
    }
}
?>
