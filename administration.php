<?php include('include/header.php'); ?>

<style>
/* ----- Section Header ----- */
.page-title {
    text-align: center;
    padding: 40px 20px 20px;
    font-size: 2rem;
    font-weight: bold;
    color: #a93226;
}

/* ----- Admin Cards ----- */
.profile-card {
    display: flex;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    margin-bottom: 30px;
    transition: transform 0.3s;
}

.profile-card:hover {
    transform: scale(1.01);
}

.profile-photo {
    width: 180px;
    height: 180px;
    object-fit: cover;
}

.profile-image-container {
    flex: 0 0 180px;
}

.profile-info {
    padding: 20px;
    flex: 1;
}

.profile-info h5 {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
    color: #333;
}

.profile-info .position {
    font-size: 1rem;
    color: #a93226;
    margin-bottom: 10px;
}

.profile-info p {
    font-size: 0.95rem;
    color: #555;
}

@media (max-width: 768px) {
    .profile-card {
        flex-direction: column;
        text-align: center;
        align-items: center;
    }

    .profile-image-container {
        flex: none;
    }

    .profile-info {
        padding: 15px;
    }
}
</style>
<!-- Page Title -->
<div class="page-title">Meet Our Administration</div>

<!-- Admin Profiles -->
<div class="container">

    <!-- Profile Card 1 -->
    <div class="profile-card">
        <div class="profile-image-container">
            <img src="admin1.jpg" alt="Admin Photo" class="profile-photo">
        </div>
        <div class="profile-info">
            <div class="position">Principal</div>
            <h5>Dr. K. K. Sharma</h5>
            <p>Dr. Sharma has over 25 years of experience in academic administration and leads the institution with a
                vision of inclusive growth and innovation.</p>
        </div>
    </div>

    <!-- Profile Card 2 -->
    <div class="profile-card">
        <div class="profile-image-container">
            <img src="admin2.jpg" alt="Admin Photo" class="profile-photo">
        </div>
        <div class="profile-info">
            <div class="position">Vice Principal</div>
            <h5>Prof. Neha Gupta</h5>
            <p>Prof. Gupta manages academic scheduling and student affairs with a focus on quality and discipline-driven
                education.</p>
        </div>
    </div>

    <!-- Add more profile cards below as needed -->

</div>



<?php include('include/footer.php'); ?>