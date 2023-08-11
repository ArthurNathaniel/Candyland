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
            <div class="text-contact">
                <h1 data-aos="zoom-in" data-aos-duration="1000">Contact Us</h1>
            </div>
        </div>


        <section>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d939994.4493092725!2d-1.3951800725619405!3d6.2345323833276725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xfdbebea737c88fd%3A0xa690c80bafb8d5fb!2sPGFC%2BQHW%20Candyland%20School%20Ejisu%2C%20Ejisu!3m2!1d6.7244928999999996!2d-1.4785367!5e1!3m2!1sen!2sgh!4v1682948278054!5m2!1sen!2sgh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section>
            <div class="row gy-5 contact-form">
                <div class="col-md-8 mee">
                    <form action="" class="row me-form" onclick="preventReload(event)">
                        <div class="col-md-12" style="margin-bottom: 20px;">
                            <h3>Send Message</h3>

                        </div>
                        <div class="form_group col-md-6 mee">

                            <input type="text" id="name" placeholder="Your Name" required>
                        </div>

                        <div class="form_group col-md-6 mee">

                            <input type="email" id="email" placeholder="Email" required>
                        </div>

                        <div class="form_group col-md-6 mee">

                            <input type="number" min="0" id="number" placeholder="Phone Number" required>
                        </div>
                        <div class="form_group col-md-6 mee">

                            <input type="text" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form_group col-md-12">

                            <textarea id="message" placeholder="Message" required></textarea>
                        </div>

                        <input type="submit" class="submit" value="Send Message" onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal">

                    </form>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"><i class="fas fa-envelope"></i>
                                    Success!
                                </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <p style="text-align: center;"> <strong id="user"></strong>,
                                    Your message has been sent successfully. Thank you for contacting us!
                                </p>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mee">
                    <div class="row">
                        <div class="col-md-12 boxes mee">
                            <h6>Phone Number:</h6>
                            <p>
                                <a href="tel:+233556120878" style="text-decoration:none; color:#000;">
                                    <i class="fas fa-phone-alt"></i>
                                    +233 000 000 000
                                </a>
                            </p>
                            <p> <a href="tel: +233559558041" style="text-decoration:none; color:#000;">
                                    <i class=" fas fa-phone-alt"></i>
                                    +233 000 000 000
                                </a></p>
                        </div>

                        <div class="col-md-12 boxes mee">
                            <h6>Email Address:</h6>
                            <p><a href="mailto:" style="text-decoration: none; color:#000;"> <i class="fas fa-envelope"></i>candylandbabyworld@yahoo.com</a></p>
                        </div>

                        <div class="col-md-12 boxes mee">
                            <h6>Location:</h6>
                            <p><i class="fas fa-map-marker-alt"></i>
                                <a href="https://goo.gl/maps/q9R5W8CkLkNfwH15A" style="color:#000; text-decoration:none;">
                                    Ejisu near bestheda baptist church
                                </a>
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>



        <?php include 'footer.php'; ?>
    </div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script>
        preventReload = (event) => {
            event.preventDefault();
        }
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("PRYDegR7pwKQEHgzb");
        })();
    </script>
    <script>
        sendMail = () => {
            var params = {
                name: document.getElementById('name').value,
                number: document.getElementById('number').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value,
            }

            const serviceID = 'service_jijdq3b'
            const templateID = 'template_soah3vy'


            document.getElementById('user').innerHTML = document.getElementById('name').value
            emailjs.send(serviceID, templateID, params)
                .then(() => {
                    console.log('successfully');
                    document.getElementById('name').value = '',
                        document.getElementById('number').value = '',
                        document.getElementById('email').value = '',
                        document.getElementById('subject').value = '',
                        document.getElementById('message').value = ''
                })
        }
    </script>


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