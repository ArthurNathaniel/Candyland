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
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="overflow-hidden">
        <?php include 'navbar.php'; ?>
        <div id="welcome-hero">
            <div class="text-pg">
                <h1>Photo Gallery</h1>
                <!-- <p>
                    A collection of our school's photos showcasing our activities and events
                </p> -->
            </div>
        </div>

        <section>
            <div class="photo">
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244653475680296/life-4.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-1.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244653161091113/candy-banner-3.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-2.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244653970604103/life-5.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-3.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244768168902666/foundation-2.jpeg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-4.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244768974225450/foundation-3.jpeg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-5.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244769678852237/life-1.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-6.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244770748407808/life-2.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-7.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244771130097775/life-3.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-8.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244895600267336/candy-banner-5.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-9.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244896686592050/academics-3.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-10.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244897164738642/candy-banner.jpg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-11.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
                <div class="gallery">
                    <a href="https://cdn.discordapp.com/attachments/1045730053041946755/1103244897445761104/candy-banner-1.jpeg" data-lightbox="gallery" data-title="Candyland School Students" download>
                        <img src="images/g-12.jpeg.jpg" alt="Photo of a student in candyland School">
                    </a>
                </div>
              
            </div>
        </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>