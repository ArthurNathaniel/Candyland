<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Candyland School</title>
    <!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Bootstrap  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- lightbox CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css"
    />
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="overflow-hidden">
      <?php include 'navbar.php'; ?>
      <div id="welcome-hero">
        <div class="text-welcome">
          <h1>Pre-School</h1>
          <p>Early Learning at Candyland School</p>
        </div>
      </div>

      <section>
        <div class="academics">
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

      <div class="photo">
        <div class="gallery">
          <a
            href="https://placehold.jp/1200x750.png"
            data-lightbox="gallery"
            data-title="Candyland School Students"
            download
          >
            <img
              src="https://placehold.jp/400x350.png"
              alt="Photo of a student in candyland School"
            />
          </a>
        </div>

        <div class="gallery">
          <a
            href="https://placehold.jp/1200x750.png"
            data-lightbox="gallery"
            data-title="Candyland School Students"
            download
          >
            <img
              src="https://placehold.jp/400x350.png"
              alt="Photo of a student in candyland School"
            />
          </a>
        </div>

        <div class="gallery">
          <a
            href="https://placehold.jp/1200x750.png"
            data-lightbox="gallery"
            data-title="Candyland School Students"
            download
          >
            <img
              src="https://placehold.jp/400x350.png"
              alt="Photo of a student in candyland School"
            />
          </a>
        </div>
      </div>

      <?php include 'call-to-action.php'; ?>
      <?php include 'footer.php'; ?>
    </div>

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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
