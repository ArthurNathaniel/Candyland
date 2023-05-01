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
          <h1>Facilities</h1>
          <p>State-of-the-Art Facilities, Where Learning Meets Innovation.</p>
        </div>
      </div>
      <section>
        <div class="facilities">
          <div class="whole-facilities">
            <div class="heading-facilities">
              <h3>Modern Classroom</h3>
            </div>
            <p>
              At Candyland School, we believe that modern classrooms are
              essential in creating a conducive learning environment for
              students. Our classrooms are designed to promote creativity,
              collaboration, and critical thinking skills, allowing students to
              thrive academically and socially. With state-of-the-art facilities
              and technology, our modern classrooms are equipped to meet the
              needs of 21st-century learners, providing them with a dynamic and
              engaging learning experience. Our dedicated teachers use
              innovative teaching methods and strategies to deliver quality
              education, and our modern classrooms are a testament to our
              commitment to excellence in education
            </p>
            <h1 class="facilities-icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </h1>
          </div>
        </div>

        <div class="facilities">
          <div class="whole-facilities">
            <div class="heading-facilities">
              <h3>Computer Laboratory</h3>
            </div>
            <p>
              Our computer laboratory is equipped with the latest technology and
              software to provide our students with the opportunity to learn and
              practice computer skills. It is a hub for digital learning and
              innovation where students can enhance their knowledge in various
              fields of technology. Our computer laboratory is designed to meet
              the needs of students of all ages, from primary to high school
              levels, and it is also utilized by our faculty for conducting
              research and developing educational content.
            </p>
            <h1 class="facilities-icon">
              <i class="fas fa-laptop"></i>
            </h1>
          </div>
        </div>

        <div class="facilities">
          <div class="whole-facilities">
            <div class="heading-facilities">
              <h3>Library</h3>
            </div>
            <p>
              The library at Candyland School is more than just a room filled
              with books. It is a place where students can explore their
              interests, expand their knowledge, and enhance their learning
              experience. With a wide variety of resources available, including
              books, magazines, newspapers, and online databases, our library
              provides a supportive environment where students can discover new
              ideas, conduct research, and improve their academic skills. Our
              skilled librarians are always available to assist students with
              their information needs, making the library a hub of intellectual
              activity and a vital resource for our school community.
            </p>
            <h1 class="facilities-icon">
              <i class="fas fa-book"></i>
            </h1>
          </div>
        </div>

        <div class="facilities">
          <div class="whole-facilities">
            <div class="heading-facilities">
              <h3>Playground</h3>
            </div>
            <p>
              Our playgrounds at Candyland School provide a safe and stimulating
              environment for our students to engage in various physical
              activities. We believe that playtime is an essential component of
              a child's development, and our playgrounds are designed to
              facilitate this. Our playgrounds feature various equipment, such
              as swings, slides, and climbing frames, which help our students
              develop their gross motor skills and improve their balance and
              coordination. Additionally, we ensure that our playgrounds are
              regularly maintained and inspected for safety to ensure that our
              students can enjoy their playtime without any worries.
            </p>
            <h1 class="facilities-icon">
              <i class="fas fa-gamepad"></i>
            </h1>
          </div>
        </div>

        <div class="facilities">
          <div class="whole-facilities">
            <div class="heading-facilities">
              <h3>Cafeterias</h3>
            </div>
            <p>
              At Candyland School, we understand that proper nutrition is
              essential for our students' growth and development. Our cafeteria
              provides a balanced and healthy diet for our students, ensuring
              that they have the energy and focus to excel in their academic and
              extracurricular pursuits. We prioritize cleanliness and hygiene in
              our cafeteria to maintain a healthy environment for our students.
              We also strive to make our cafeteria a social space where students
              can interact and build relationships with their peers, creating a
              welcoming and inclusive school community.
            </p>
            <h1 class="facilities-icon">
              <i class="fas fa-utensils"></i>
            </h1>
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
