   <!-- footer section -->

   <section>
        <div class="container pb-5 pt-5 mt-5" style="height: fit-content;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 col-sm-4 mt-sm-2">
                    <img src="https://admissionscope.com/public/web/assets/img/logo.jpeg" alt="" width="172px">
                </div>

                <div class="col-lg-2 col-sm-4 mt-sm-2 fs-6 fw-light">
                    <ul class="g-5">
                        <li class="mt-2">About us</li>
                        <li class="mt-2">Mission & Vision</li>
                        <li class="mt-2"> Our Service</li>
                        <li class="mt-2">Education Loans</li>
                        <li class="mt-2">Career Counseling</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-4 mt-sm-2 fs-6 fw-light">
                    <ul class="g-5">
                        <li> Admission Guidance</li>
                        <li class="mt-2">Our Gallery</li>
                        <li class="mt-2">Contact With Us</li>
                        <li class="mt-2">Apply Now</li>

                    </ul>
                </div>

                <div class="col-lg-3 col-sm-12 m-sm-2 fs-6 fw-light">
                    <ul class="g-5">

                        <li> <b>Address:</b> 1st Floor Mithulok Building, Boring Road ,Near Bharat Petrol Pump Patna,
                            Bihar
                            800001 India</li>
                        <li><a href="tel:+919709841199"> +91 - 9709841199</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid p-3">
            <div class="row d-flex justify-content-center text-center align-content-center">
                <div class="col-lg-3 col-sm-12 fs-6 fw-light">
                    <ul>
                        <li>
                            <p>copyright &copy;  Admission Scope <?= date('y') ?>.</p>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-sm-12 fs-6 fw-bold">
                    <ul>
                        <li>
                            <p class="text-primary ">+91 123-5678-390</p>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12 fs-6 fw-light">
                    <ul>
                        <li>
                            <p>info@admissionscope.com Developed By : <span
                                    class="text-primary fw-bold">Raghwendra</span></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.tamater').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 10,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
    <script>
        $('.home').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 10,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

    <script>
        $('.story').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            margin: 10,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>
</html>