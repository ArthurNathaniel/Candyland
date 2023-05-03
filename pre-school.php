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
      <div class="text-pre-school">
        <h1 data-aos="zoom-in" data-aos-duration="1000">Pre-School</h1>
        <p data-aos="zoom-in" data-aos-duration="1200">Early Learning at Candyland School</p>
      </div>
    </div>

    <section>
      <div class="academics" data-aos="zoom-in-up">
        </>
        <h1 class="text-center">PRE-SCHOOL</h1>
        <p>
          At Candyland School, we believe that every child deserves a strong
          foundation that will serve as the bedrock for their future academic
          success. Our Pre-School program is designed to provide young
          learners with a stimulating and nurturing environment that promotes
          social, emotional, physical, and cognitive development. Our
          curriculum is carefully crafted to encourage exploration,
          creativity, and discovery through play-based learning.
          <br />
          Our experienced and dedicated teachers use a variety of teaching
          methods to engage and challenge each child to reach their full
          potential. We place a strong emphasis on fostering a love for
          learning, building self-confidence, and developing independence in
          our young students. Our goal is to help them develop the necessary
          skills and habits that will prepare them for a successful transition
          into Primary school.
          <br />
          At Candyland School, we understand that each child is unique and we
          strive to provide a personalized learning experience that meets the
          individual needs and interests of each student. We work closely with
          parents to create a supportive learning community that values
          collaboration, communication, and respect. Join us and let us help
          your child unlock their full potential.
        </p>
      </div>
    </section>

    <div class="photo" data-aos="zoom-in">

      <div class="gallery">
        <a href="images/candyland-pre-school-ABC.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-pre-school-ABC-.jpg" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="images/candyland-pre-school-playing.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-pre-school-playing-.jpg" alt="Photo of a student in candyland School" />
        </a>
      </div>

      <div class="gallery">
        <a href="images/candyland-pre-school-lego.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
          <img src="images/candyland-pre-school-lego-.jpg" alt="Photo of a student in candyland School" />
        </a>
      </div>
    </div>

    <?php include 'call-to-action.php'; ?>
    <?php include 'footer.php'; ?>
  </div>

  <!-- lightbox Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
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