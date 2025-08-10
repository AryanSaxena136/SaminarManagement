<?php
include('include/header.php');
?>


<section class="topics">

    <!-- Bootstrap Carousel Slider with Images -->
    <div id="seminarBenefitsCarousel" class="carousel slide" data-bs-interval="3000" data-bs-pause="false"
        data-bs-ride="carousel">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#seminarImageCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#seminarImageCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>

                <!-- Static Text Overlay (outside .carousel-inner) -->
                <div class="static-caption-bottom-left">
                    <h5>About SKIT College</h5>
                    <!-- <p>Learn, present, and grow together</p> -->
                </div>
            </div>
        </div>

        <!-- Optional Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#seminarBenefitsCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#seminarBenefitsCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>

<!-- Main Content -->
<div class="content">
    <section class="intro-section">
        <div class="intro-text">
            <h2>Welcome To SKIT College</h2>
            <p>
                Swami Keshvanand Institute of Technology, Management & Gramothan (SKIT) inspired from the learnings of
                Swami
                Keshvanand, was established in the year 2000 by Technocrats and Managers Society of Advanced Learning
                and
                Gramothan. Today the institute is recognized as one of the centers of academic excellence in Northern
                India.
                The Institute is affiliated to Rajasthan Technical University, Kota for offering Postgraduate and
                Graduate
                Courses in Engineering and Management. Our sister institution Swami Keshvanand Institute of Pharmacy
                (SKIP)
                is affiliated to Rajasthan University of Health Sciences for offering Graduate Course in Pharmacy.
            </p>
        </div>
        <div class="intro-image">
            <img src="assets/images/imageeeeee.jpg" alt="Seminar Discussion">
        </div>
    </section>

</div>
<div class="content">
    <section class="vision-section">
        <div class="vision-image">
            <img src="assets/images/vision_image.jpg" alt="Vision for Future Learning">
        </div>
        <div class="vision-text">
            <h2>Vision</h2>
            <p>
                To promote higher learning in advanced technology, management skills and industrial research to make our
                country a global player
            </p>
            <h2>Mission</h2>
            <p>
                To promote quality education, training and research in the field of engineering & management by
                establishing
                effective interface with industry and to encourage faculty to undertake industry sponsored projects for
                students
            </p>
            <h2>Quality Policy</h2>
            <p>
                We are committed to ‘achievement of quality’ as an integral part of our institutional policy by
                continuous
                self-evaluation and striving to improve ourselves.

                Institute would pursue quality in

                • All its endeavours like admissions, teaching- learning processes, examinations, extra and
                co-curricular
                activities, industry institution interaction, research & development, continuing education, and
                consultancy.

                • Functional areas like teaching departments, Training & Placement Cell, library, administrative office,
                accounts office, hostels, canteen, security services, transport, maintenance section and all other
                services.

            </p>

    </section>

</div>

<?php
include('include/footer.php');
?>