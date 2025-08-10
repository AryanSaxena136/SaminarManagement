<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $employee_id = $_POST['employee_id'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO teachers (name, employee_id, email, password)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $employee_id, $email, $password);

    if ($stmt->execute()) {
        echo "Teacher account created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
