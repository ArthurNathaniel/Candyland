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
      <div class="text-jhs">
        <h1 data-aos="zoom-in" data-aos-duration="1000">JHS</h1>
        <p data-aos="zoom-in" data-aos-duration="1200">Preparing Students for Success at Candyland School</p>
      </div>
    </div>

    <section>
      <div class="academics">
        <h1 class="text-center">JHS</h1>
        <p>
          At Candyland School, we are committed to providing a comprehensive
          education that prepares our students for success in all aspects of
          life. Our Junior High School program is designed to meet the
          standards set by the Ghana Education Service (GES), ensuring that
          our students receive a high-quality education that prepares them for
          the Basic Education Certificate Examination (BECE).
          <br />
          Our experienced and dedicated teachers use a variety of teaching
          methods and resources to help students achieve their academic
          potential. We emphasize a student-centered approach, providing
          opportunities for students to engage in critical thinking,
          problem-solving, and independent learning. Our curriculum is
          designed to provide a well-rounded education, incorporating not only
          core academic subjects but also practical skills, such as computer
          literacy and leadership development.
          <br />
          We are proud of the excellent results our students achieve in the
          BECE, a testament to the hard work and dedication of our students
          and teachers. Beyond academic achievement, we strive to instill in
          our students a strong sense of values, ethics, and community
          responsibility, preparing them to be leaders and positive
          contributors to society.
          <br />
          Overall, our Junior High School program at Candyland School is
          committed to providing a well-rounded, challenging, and supportive
          environment that fosters academic excellence, personal growth, and
          community engagement.
        </p>
      </div>
    </section>

    <div class="photo">
      <div class="gallery">
        <a href="https://placehold.jp/1200x750.png" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="https://placehold.jp/400x350.png" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="https://placehold.jp/1200x750.png" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="https://placehold.jp/400x350.png" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="https://placehold.jp/1200x750.png" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="https://placehold.jp/400x350.png" alt="Photo of a student in candyland School" />
        </a>
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