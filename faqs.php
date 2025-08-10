<?php
include('include/header.php');
?>
<!-- FAQ Content -->
<div class="content">
    <h2 class="text-center text-danger mb-4">❓ Frequently Asked Questions</h2>

    <div class="accordion" id="faqAccordion">

        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    What is a seminar course?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    A seminar course is an academic session where students present, discuss, and critically analyze
                    topics in a
                    group setting, usually guided by a mentor.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How are shifts managed?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Morning and evening shifts are scheduled in advance. You can check your assigned slot on the
                    schedule page.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What happens if I miss a deadline?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Missing a deadline may affect your assessment. Contact your faculty coordinator immediately for
                    options.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I change my seminar topic later?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, topic changes are allowed within the first week of the semester with approval from your mentor.
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include('include/footer.php');
?>