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

    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="overflow-hidden">
      <?php include 'navbar.php'; ?>
      <div id="welcome-hero">
        <div class="text-welcome">
          <h1>Welcome to Candyland School</h1>
          <p>
            Join us on an exciting educational journey filled with endless <br>
            possibilities
          </p>
          
        </div>
      </div>

      <section>
        <div class="welcome-message row gy-5">
          <div class="welcome-image col-md-6">
            <img
              src="images/mistress-candyland.png"
              alt="school-principal or head master image"
            />
          </div>
          <div class="welcome-text col-md-6">
            <h2>Welcome Message from the Principal</h2>
            <p>
              It is my pleasure to welcome you all to Candyland School. Our
              institution is committed to providing the highest quality
              education to our students. We believe that each child is unique
              and deserves to be given every opportunity to achieve their full
              potential. At Candyland School, we strive to create a stimulating
              and nurturing environment that fosters creativity, critical
              thinking, and problem-solving skills. Our experienced teachers are
              dedicated to ensuring that every child receives individual
              attention and support, as well as the resources they need to excel
              academically and socially. We are passionate about our students'
              success and believe that their education is the key to unlocking
              their full potential. We look forward to working with you as
              partners in your child's education journey. Thank you for choosing
              Candyland School as your child's learning institution. We are
              excited to have you on board and look forward to a successful and
              rewarding academic year ahead.
            </p>
          </div>
        </div>
      </section>

      <?php include 'call-to-action.php'; ?>
      <?php include 'footer.php'; ?>
    </div>

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
