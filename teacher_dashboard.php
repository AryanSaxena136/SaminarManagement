<?php
include 'config.php';

// Check authentication
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}

include('include/header.php');
?>

<div class="content">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>

    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6 bg-transparent">
            <div class="carousel-inner ">
                <div class="carousel-item active text-center p-5 " style="width: 400px;">View projects</div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 bg-transparent">
            <div class="carousel-inner">
                <div class="carousel-item active text-center p-5 " style="width: 400px;">Schedule seminar</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 bg-transparent">
            <div class="carousel-inner">
                <div class="carousel-item active text-center p-5 " style="width: 400px;">View and edit seminar</div>
            </div>
        </div>

    </div>
</div>

<?php include('include/footer.php'); ?>