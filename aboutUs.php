<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seminar Course</title>

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7f7f7;
      color: #333;
    }
    
    .logo-image{
      width: 100%;
      height: 100%;
   
    }
    .logo-setting{
     width:100px ;
    }
    
    .line{
     margin-top: 30px;
    }

    /* Navbar */
    .navbar {
      background-color: #a93226;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: 500;
    }

    .navbar .login-btn {
      background-color: white;
      color: #a93226;
      padding: 6px 14px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }

    /* .content{
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
      margin: 40px;
      border-radius: 10px
    } */
     /* .vision-section {
  background-color: #e0f7fa; pastel blue
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px;
  gap: 30px;
  flex-wrap: wrap;
}

.vision-text {
  flex: 1;
}

.vision-text h1 {
  font-size: 2.5rem;
  color: #004d40; deep teal for contrast
  margin-bottom: 20px;
}

.vision-text p {
  font-size: 1rem;
  line-height: 1.6;
  color: #333;
}

.vision-image {
  flex: 1;
}

.vision-image img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.vision-image img:hover {
  transform: scale(1.05);
} */
 /* .vision-section {
  background-color: #f4f4f4; Soft Light Grey
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px;
  gap: 30px;
  flex-wrap: wrap;
}

.vision-text {
  flex: 1;
}

.vision-text h1 {
  font-size: 2.5rem;
  color: #a93226; Matches your navbar theme
  margin-bottom: 20px;
}

.vision-text p {
  font-size: 1rem;
  line-height: 1.6;
  color: #333;
}

.vision-image {
  flex: 1;
}

.vision-image img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.vision-image img:hover {
  transform: scale(1.05);
} */
 .vision-section {
  background-color: #dcdcdc; /* Slate Grey */
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 50px;
  gap: 30px;
  flex-wrap: wrap;
}

.vision-text {
  flex: 1;
}

.vision-text h2 {
  font-size: 2.5rem;
  color: #a93226; /* Your red theme color */
  margin-bottom: 20px;
}

.vision-text p {
  font-size: 1rem;
  line-height: 1.6;
  color: #333; /* Strong readable text */
}

.vision-image {
  flex: 1;
}

.vision-image img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.vision-image img:hover {
  transform: scale(1.05);
}

@media (max-width: 768px) {
  .vision-section {
    flex-direction: column;
    text-align: center;
    padding: 30px;
  }
}


@media (max-width: 768px) {
  .vision-section {
    flex-direction: column;
    text-align: center;
    padding: 30px;
  }
}


@media (max-width: 768px) {
  .vision-section {
    flex-direction: column;
    text-align: center;
    padding: 30px;
  }
}


    .intro-section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px;
      gap: 30px;

    }

    .intro-text {
      flex: 1;
    }

    .intro-text h2 {
      font-size: 2.5rem;
      color: #a93226;
      margin-bottom: 20px;
    }

    .intro-text p {
      font-size: 1rem;
      line-height: 1.6;
    }

    .intro-image {
      flex: 1;
    }

    .intro-image img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .intro-image img:hover {
      transform: scale(1.05);
    }

    .topics {
      justify-content: space-between;
      /* padding:  35px; */
      gap: 30px;
    }

    .benefits {
      font-family: "Mallory", Verdana, Arial, Helvetica, sans-serif;
      font-size: 25px;
      margin-top: 0px;
      text-align: center;
    }

    .footer {
      background-color: #a93226;
      /* Dark background */
      color: white;
      padding: 30px;
    }

    .footer h5 {
      margin: 0 0 10px;
      margin-left: 500px;
    }

    .social-icons a {
      margin: 10px;
      text-decoration: none;
      display: inline-block;
    }

    .social-icons {
      margin-left: 520px;
    }
  


    /* Responsive */
    @media (max-width: 768px) {
      .intro-section {
        flex-direction: column;
        text-align: center;
        padding: 30px;
        margin: 20px;
      }
    }
    .carousel-inner img {
  height: 350px; /* Adjust this as needed, current full might be ~500px */
  object-fit: cover;
}
    .carousel-caption-bottom-left {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black */
  padding: 10px 15px;
  border-radius: 5px;
  max-width: 60%;
}
.static-caption-bottom-left {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  /* background-color: rgba(0, 0, 0, 0.5); translucent black */
  padding: 12px 20px;
  border-radius: 8px;
  z-index: 10;
  max-width: 60%;
}

.static-caption-bottom-left h5 {
  margin: 0;
  font-size: 1.25rem;
  font-weight: bold;
}

.static-caption-bottom-left p {
  margin: 5px 0 0;
  font-size: 1rem;
}


/* .carousel-caption-bottom-left h5 {
  margin: 0;
  font-size: 1.25rem;
  font-weight: bold;
}

.carousel-caption-bottom-left p {
  margin: 5px 0 0;
  font-size: 0.95rem;
} */


  </style>
</head>

<body>
        <div class="header">
        <div class="logo-image">
         <img src="assets/images/skit_logo.png" class="logo-setting">
        </div>

  <!-- Navbar -->
   <div class="line">
  <div class="navbar">
    <div>
      <a href="index.html">About</a>
      <a href="index.html">Schedule</a>
      <a href="index.html">FAQs</a>
      <a href="index.html">Resources</a>
    </div>
    </div>
    <!-- <button class="login-btn">Login</button> -->
  </div>
  <section class="topics">
    <!-- <div class="benefits">
      <p>What's the benefits</p>
    </div> -->
    <!-- Bootstrap Carousel Slider for Seminar Benefits -->
     <!-- Bootstrap Carousel Slider with Images -->
<div id="seminarBenefitsCarousel" class="carousel slide" data-bs-interval="3000" data-bs-pause="false" data-bs-ride="carousel">
  <div class="position-relative">
  <!-- Carousel -->
  <div id="seminarImageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/img1.webp" class="d-block w-100" alt="Seminar 1">
      </div>
      <div class="carousel-item">
        <img src="assets/images/img2.webp" class="d-block w-100" alt="Seminar 2">
      </div>
      <div class="carousel-item">
        <img src="assets/images/img3.webp" class="d-block w-100" alt="Seminar 3">
      </div>
      <div class="carousel-item">
        <img src="assets/images/img4.webp" class="d-block w-100" alt="Seminar 3">
      </div>
      <div class="carousel-item">
        <img src="assets/images/img5.webp" class="d-block w-100" alt="Seminar 3">
      </div>
      <div class="carousel-item">
        <img src="assets/images/img6.webp" class="d-block w-100" alt="Seminar 3">
      </div>
    </div>

    <!-- Optional Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#seminarImageCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#seminarImageCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>

    <!-- Static Text Overlay (outside .carousel-inner) -->
    <div class="static-caption-bottom-left">
      <h5>About SKIT College</h5>
      <!-- <p>Learn, present, and grow together</p> -->
    </div>
  </div>
</div>

  <!-- <div class="carousel-inner">
    <div class="carousel-item active position-relative">
  <img src="img1.webp" class="d-block w-100" alt="Benefit 1">
  <div class="carousel-caption-bottom-left">
    <h5>Seminar Insight</h5>
    <p>Boosts your confidence in public speaking</p>
  </div>
</div>

<div class="carousel-item position-relative">
  <img src="img2.webp" class="d-block w-100" alt="Benefit 2">
  <div class="carousel-caption-bottom-left">
    <h5>Critical Thinking</h5>
    <p>Encourages research and discussion</p>
  </div>
</div> -->
<!-- Add more slides as needed -->

    <!-- <div class="carousel-item active">
      <img src="img1.webp" class="d-block w-100" alt="Benefit 1">
    </div>
    <div class="carousel-item">
      <img src="img2.webp" class="d-block w-100" alt="Benefit 2">
    </div>
    <div class="carousel-item">
      <img src="img3.webp" class="d-block w-100" alt="Benefit 3">
    </div>
  </div> -->

  <!-- Optional Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#seminarBenefitsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#seminarBenefitsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- <div id="seminarBenefitsCarousel" class="carousel slide" data-bs-interval="3000" data-bs-pause="false" data-bs-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active text-center p-5 bg-light">
          <h4>🎤 Boosts Public Speaking</h4>
          <p>Helps students build confidence and present ideas clearly.</p>
        </div>

        <div class="carousel-item text-center p-5 bg-light">
          <h4>🧠 Enhances Critical Thinking</h4>
          <p>Encourages deep research, logical analysis, and creative insights.</p>
        </div>

        <div class="carousel-item text-center p-5 bg-light">
          <h4>🤝 Develops Teamwork</h4>
          <p>Fosters collaboration, coordination, and shared responsibility.</p>
        </div>

        <div class="carousel-item text-center p-5 bg-light">
          <h4>📚 Academic and Real-World Prep</h4>
          <p>Equips students for professional presentations and discussions.</p>
        </div>

      </div>


    </div> -->
  </section>

  <!-- Main Content -->
   <div class="content">
  <section class="intro-section">
    <div class="intro-text">
      <h2>Welcome To SKIT College</h2>
      <p>
       Swami Keshvanand Institute of Technology, Management & Gramothan (SKIT) inspired from the learnings of Swami Keshvanand, was established in the year 2000 by Technocrats and Managers Society of Advanced Learning and Gramothan. Today the institute is recognized as one of the centers of academic excellence in Northern India. The Institute is affiliated to Rajasthan Technical University, Kota for offering Postgraduate and Graduate Courses in Engineering and Management. Our sister institution Swami Keshvanand Institute of Pharmacy (SKIP) is affiliated to Rajasthan University of Health Sciences for offering Graduate Course in Pharmacy.
      </p>
    </div>
    <div class="intro-image">
      <img src="assets/images/imageeeeee.jpg" alt="Seminar Discussion">
    </div>
  </section>
  
  </div>
  <section class="vision-section">
    <div class="vision-image">
    <img src="assets/images/vision_image.jpg" alt="Vision for Future Learning">
  </div>
  <div class="vision-text">
    <h2>Vision</h2>
    <p>
      To promote higher learning in advanced technology, management skills and industrial research to make our country a global player
    </p>
    <h2>Mission</h2>
    <p>
      To promote quality education, training and research in the field of engineering & management by establishing effective interface with industry and to encourage faculty to undertake industry sponsored projects for students
    </p>
    <h2>Quality Policy</h2>
    <p>
      We are committed to ‘achievement of quality’ as an integral part of our institutional policy by continuous self-evaluation and striving to improve ourselves.

Institute would pursue quality in

• All its endeavours like admissions, teaching- learning processes, examinations, extra and co-curricular activities, industry institution interaction, research & development, continuing education, and consultancy.

• Functional areas like teaching departments, Training & Placement Cell, library, administrative office, accounts office, hostels, canteen, security services, transport, maintenance section and all other services.

 
    </p>

 

  
</section>


  <!--footer-->
  <div class="footer ">
    <h5>Be sure to contact with us</h5>
    <div class="social-icons">
      <a href="https://facebook.com" target="_blank">
        <i class="fa fa-facebook-square"></i>
      </a>
      <a href="https://twitter.com" target="_blank">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="https://youtube.com" target="_blank">
        <i class="fa fa-youtube-play"></i>
      </a>
      <a href="https://instagram.com" target="_blank">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="https://linkedin.com" target="_blank">
        <i class="fa fa-linkedin"></i>
      </a>
    </div>
  </div>
  </div>
</body>

</html>