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
      <div class="text-primary-">
        <h1 data-aos="zoom-in" data-aos-duration="1000">Primary</h1>
        <p data-aos="zoom-in" data-aos-duration="1200">Empowering Young Minds at Candyland School</p>
      </div>
    </div>

    <section>
      <div class="academics">
        <h1 class="text-center">PRIMARY</h1>
        <p>
          Our Primary School program at Candyland School provides a
          comprehensive and rigorous education that empowers our students to
          succeed in all aspects of their lives. Our experienced teachers and
          staff are dedicated to creating a positive and nurturing learning
          environment where every child feels supported and challenged to
          reach their full potential.
          <br />
          In addition to our core curriculum in math, science, language arts,
          and social studies, we offer a variety of extracurricular activities
          that enhance our students' learning and development. Our music, art,
          and physical education programs encourage creativity and healthy
          habits, while our clubs and after-school programs provide
          opportunities for students to pursue their interests and explore new
          subjects.
          <br />
          At Candyland School, we believe that education is a partnership
          between the school, the students, and their families. We work
          closely with parents and guardians to ensure that each child
          receives the individual attention and support they need to thrive
          academically and emotionally.
          <br />
          We are proud to say that our Primary School program consistently
          produces students who are well-prepared for the challenges of higher
          education and beyond. We are committed to providing an education
          that inspires a lifelong love of learning and sets our students on
          the path to success.
        </p>
      </div>
    </section>

    <div class="photo">
      <div class="gallery">
        <a href="images/candyland-primary.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-primary.jpg" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="images/candyland-primary-nurse.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-primary-nurse-.jpg" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="images/candyland-primary-learning.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-primary-learning-.jpg" alt="Photo of a student in candyland School" />
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