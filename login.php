<?php
include('include/header.php');
?>


<div class="auth-container">
  
  <ul class="nav nav-pills mb-4 justify-content-center" id="roleTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="student-tab" data-bs-toggle="tab" data-bs-target="#student" type="button" role="tab">Student</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher" type="button" role="tab">Teacher</button>
    </li>
  </ul>

  <div class="tab-content" id="roleTabContent">

    
    <div class="tab-pane fade show active" id="student" role="tabpanel">
      <ul class="nav nav-tabs mb-3" id="studentAuthTab" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#student-login" type="button">Login</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#student-signup" type="button">Sign Up</button>
        </li>
      </ul>
      <div class="tab-content">
        
        <div class="tab-pane fade show active" id="student-login">
          <h4 class="form-title">Student Login</h4>
          <form action="login-signup/student_login.php" method="POST">
            <div class="mb-3">
              <label class="form-label">College ID</label>
              <input type="text" class="form-control" name="college_id" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn w-100" style="background-color: rgb(191,43,43); color: white;">Login</button>
          </form>
        </div>
        
        <div class="tab-pane fade" id="student-signup">
          <h4 class="form-title">Student Sign Up</h4>
          <form action="login-signup/student_signup.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">College ID</label>
              <input type="text" class="form-control" name ="college_id" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn w-100" style="background-color: rgb(191,43,43); color: white;">Create Account</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Teacher Portal -->
    <div class="tab-pane fade" id="teacher" role="tabpanel">
      <ul class="nav nav-tabs mb-3" id="teacherAuthTab" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#teacher-login" type="button">Login</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#teacher-signup" type="button">Sign Up</button>
        </li>
      </ul>
      <div class="tab-content">
        
        <div class="tab-pane fade show active" id="teacher-login">
          <h4 class="form-title">Teacher Login</h4>
          <form action="login-signup/teacher_login.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Employee ID</label>
              <input type="text" class="form-control" name="employee_id" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn w-100" style="background-color: rgb(191,43,43); color: white;">Login</button>
          </form>
        </div>
        
        <div class="tab-pane fade" id="teacher-signup">
          <h4 class="form-title">Teacher Sign Up</h4>
          <form action="login-signup/teacher_signup.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Employee ID</label>
              <input type="text" class="form-control" name="employee_id" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <button class="btn w-100" style="background-color: rgb(191,43,43); color: white;" >Create Account</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
