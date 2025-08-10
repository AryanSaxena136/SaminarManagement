<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM teachers WHERE employee_id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("s", $employee_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['employee_id'] = $row['employee_id'];
                $_SESSION['role'] = 'teacher';
                
                header("Location: ../teacher_dashboard.php");
                exit();
            } else {
                $_SESSION['login_error'] = "Incorrect password!";
                header("Location: ../login.php");
                exit();
            }
        } else {
            $_SESSION['login_error'] = "Employee ID not found!";
            header("Location: ../login.php");
            exit();
        }
    } else {
        die("Database error: " . $conn->error);
    }
}
?>