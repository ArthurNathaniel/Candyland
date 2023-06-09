<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
</head>

<body>
    <div class="overflow-hidden">
        <?php include 'navbar.php'; ?>
        <div id="welcome-hero">
            <div class="text-ad">
                <h1 data-aos="zoom-in" data-aos-duration="1000">Admission Procedure</h1>
                <p data-aos="zoom-in" data-aos-duration="1200">
                    Learn how to get your child enrolled at Candyland School through our admission process.
                </p>
            </div>
        </div>


        <div class="facilities">
            <div class="whole-facilities">
                <div class="heading-facilities">
                    <h3>Admission Procedure </h3>
                </div>
                <p>
                    Admission to Candyland School is a highly competitive process, which
                    requires prospective students to undergo an entrance examination and
                    obtain a minimum score of 50% in each subject. The examination aims
                    to evaluate a student's proficiency in specific academic areas such
                    as English and Mathematics for Kindergarten 2 through Grade 3, and
                    Science in addition to those subjects for Grades 4-JHS 1. The school
                    seeks to enroll students who have demonstrated outstanding academic
                    performance, personal growth, and community involvement. However,
                    admission is limited based on the number of available openings.
                    <br />
                    <br />
                    Prospective students and parents should be informed that admission
                    to Candyland School is not guaranteed, and the competition for
                    available slots is intense. Apart from academic performance, other
                    factors that may be considered during the selection process include
                    the student's personal character, behavior, and involvement in
                    extracurricular activities. Our admission team thoroughly evaluates
                    each application received and provides fair and equal opportunities
                    to all applicants based on their merit and eligibility.
                </p>
                <h1 class="facilities-icon">
                    <i class="fas fa-user-graduate"></i>
                </h1>
            </div>
        </div>


        <?php include 'call-to-action.php'; ?>
        <?php include 'footer.php'; ?>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- lightbox Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>