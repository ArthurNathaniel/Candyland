<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Candyland School</title>
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- lightbox CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" />
  <!--Animate On scroll-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--Custom CSS-->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="overflow-hidden">
    <?php include 'navbar.php'; ?>
    <div id="welcome-hero">
      <div class="text-welcome">
        <h1 data-aos="zoom-in" data-aos-duration="1000">Admission Policy</h1>
        <p data-aos="zoom-in" data-aos-duration="1200">
          Learn more about our admission process and requirements to enroll
          your child in Candyland School
        </p>
      </div>
    </div>

    <section>
      <div class="academics">
        <h1 class="text-center">Admission Policy</h1>
        <p>
          At Candyland School, we are committed to providing an inclusive and
          diverse learning environment for all students. We believe that every
          child should have access to a high-quality education that prepares
          them for success in their future endeavors. Our admission process is
          designed to ensure that we admit students who share our values and
          are committed to excellence in their academic and personal growth.
        </p>
      </div>
    </section>
    <div class="facilities">
      <div class="whole-facilities">
        <div class="heading-facilities">
          <h3>Admission Criteria</h3>
        </div>
        <li>
          Applicants must meet the age requirement for the grade they are
          applying for.
        </li>
        <li>
          Applicants must submit a completed application form, which includes
          contact information for parents/guardians, previous school
          information, and other relevant details.
        </li>
        <li>
          Applicants must submit transcripts or academic records from their
          previous school(s).
        </li>
        <li>
          Applicants must take an admission test to assess their knowledge and
          skills in various subjects.
        </li>
        <li>
          Applicants may be asked to participate in an interview with school
          officials.
        </li>
        <h1 class="facilities-icon">
          <i class="fas fa-user-graduate"></i>
        </h1>
      </div>
    </div>

    <div class="facilities">
      <div class="whole-facilities">
        <div class="heading-facilities">
          <h3>Admission Process</h3>
        </div>
        <li>
          Get in touch with the school to request an application form and to
          find out the application requirements and deadline.
        </li>
        <li>
          Complete the application form accurately and provide all the
          necessary information.
        </li>
        <li>
          After the admission test and interview, the Admissions Committee
          will review the applicant's file and make a decision on admission.
        </li>
        <li>
          Parents/guardians will be notified of the admission decision in
          writing.
        </li>
        <h1 class="facilities-icon">
          <i class="fas fa-user-graduate"></i>
        </h1>
      </div>
    </div>

    <div class="facilities">
      <div class="whole-facilities">
        <div class="heading-facilities">
          <h3>Enrollment</h3>
        </div>
        <li>
          Upon acceptance, parents/guardians must complete the enrollment
          process by submitting the required forms and fees.
        </li>
        <li>
          Enrollment is not complete until all forms and fees are submitted.
        </li>
        <h1 class="facilities-icon">
          <i class="fas fa-user-graduate"></i>
        </h1>
      </div>
    </div>

    <div class="facilities">
      <div class="whole-facilities">
        <div class="heading-facilities">
          <h3>Non-Discrimination Policy</h3>
        </div>
        <p>
          Candyland School does not discriminate on the basis of race, color,
          national origin, sex, age, religion, or disability in its admissions
          policies, educational programs, activities, or employment practices.
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