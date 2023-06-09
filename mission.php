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
      <div class="text-welcome">
        <h1 data-aos="zoom-in" data-aos-duration="1000">Our Mission , Vision & Philosophy</h1>
        <p data-aos="zoom-in" data-aos-duration="1200">
          Empowering young minds to reach their full potential through a
          world-class education.
        </p>
      </div>
    </div>
    <section>
      <div class="heading-mission" data-aos="zoom-out">
        <h1>Our Mission , Vision & Philosophy</h1>
        <p>
          Empowering young minds with quality education and fostering a
          lifelong love for learning, in a supportive and inclusive community
        </p>
      </div>
      <div class="whole-vm">
        <div class="our-mission" data-aos="flip-left">
          <h3 class="mission-heading" data-aos="zoom-in" data-aos-duration="1000">Our Mission</h3>
          <p data-aos="zoom-out" data-aos-duration="1200">
            Our mission at Candyland School is to provide a safe and nurturing
            learning environment that empowers our students to achieve their
            full potential. We are committed to delivering a high-quality
            education that develops critical thinking, creativity, and a
            lifelong love for learning. Our goal is to prepare our students to
            become responsible, productive, and compassionate members of
            society, equipped with the skills and knowledge to succeed in a
            rapidly changing world
          </p>
          <h3 class="mission-icon" data-aos="flip-right" data-aos-duration="1500"><i class="fas fa-bullseye fa-lg"></i></h3>
        </div>
        <div class="our-mission" data-aos="flip-left">
          <h3 class="mission-heading" data-aos="zoom-in" data-aos-duration="1000">Our Vision</h3>
          <p data-aos="zoom-out" data-aos-duration="1200">
            Our vision at Candyland School is to be a leading institution in
            the field of education, recognized for our commitment to academic
            excellence and innovation. We strive to provide a learning
            environment that fosters intellectual curiosity, cultural
            diversity, and social responsibility. Our goal is to equip our
            students with the skills, values, and competencies needed to
            become successful and ethical leaders in their communities and
            beyond.
          </p>
          <h3 class="mission-icon" data-aos="flip-right" data-aos-duration="1500"><i class="far fa-eye fa-lg"></i></h3>
        </div>
        <div class="our-mission " data-aos="flip-left">
          <h3 class="mission-heading" data-aos="zoom-in" data-aos-duration="1000">Our Philosophy </h3>
          <p data-aos="zoom-out" data-aos-duration="1200">
            At Candyland School, our philosophy is to provide a nurturing
            environment that fosters academic excellence, personal growth, and
            social responsibility. We believe in promoting the holistic
            development of our students, and strive to equip them with the
            knowledge, skills, and values needed to succeed in a dynamic and
            ever-changing world

          </p>
          <br>
          <h3 class="mission-icon" data-aos="flip-right" data-aos-duration="1500"><i class="fas fa-hands-helping"></i></h3>
        </div>
      </div>
    </section>
    <br />

    <?php include 'call-to-action.php'; ?>
    <?php include 'footer.php'; ?>
  </div>
  <!--Animate on Scroll-->
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