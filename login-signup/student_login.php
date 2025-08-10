<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $college_id = $_POST['college_id'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM students WHERE college_id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("s", $college_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            
            if (password_verify($password, $row['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['college_id'] = $row['college_id'];
                $_SESSION['role'] = 'student';
                
                // Redirect to student dashboard
                header("Location: ../student_dashboard.php");
                exit();
            } else {
                $_SESSION['login_error'] = "Incorrect password!";
                header("Location: ../login.php");
                exit();
            }
        } else {
            $_SESSION['login_error'] = "College ID not found!";
            header("Location: ../login.php");
            exit();
        }
    } else {
        die("Database error: " . $conn->error);
    }
}
?>