<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css" />
    <link rel="stylesheet" href="/css/style.css" />


    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Contact Us</title>
</head>

<body>


    <!--nav bar-->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('index.php/Home/index'); ?>">Tourist LK</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav m-3 ">



                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home/index'); ?>"> Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home/contact'); ?>"> Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/Home/about'); ?>"> About Us</a>
                    </li>





                </ul>

            </div>
        </div>
    </nav>
    <!--end nav bar-->

    <section class="container">
        <section class="mb-3">

            <!--Section heading-->
            <h2 class="text-success mb-3 mt-3 text-center">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-3">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-6  mt-1">
                    <form id="contact-form" name="contact-form" action="mail.php">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0  mt-4">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6  mt-4">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12  mt-4">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Contact Number</label>
                                    <input type="text" id="subject" name="subject" class="form-control">

                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12  mt-4">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="row mt-1 mb-3  mt-4">

                        <div class="mt-2">
                            <button type="button" class="btn btn-success btn-rounded" id="btnSaveCar ">Save</button>

                        </div>

                    </div>
                </div>
                <!--Grid column-->


                <!--Grid column-->

            </div>

            <div class="row">
                <ul class="list-unstyled mb-4 ">
                    <li><i class="fas fa-map-marker-alt fa-2x mt-4"></i>
                        <p>Colombo,Sri lanka</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x  mt-4"></i>
                        <p>+ 94 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x  mt-4"></i>
                        <p>contact@lkTravelers.com</p>
                    </li>
                </ul>



            </div>

        </section>
    </section>
    <!--Section: Contact v.2-->

    <!--Section: Contact v.2-->

















    <!--====== Javascripts & Jquery ======-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <style>
        .nav-item {
            margin-left: 50px;
            margin-right: 50px;
        }

        * {
            font-family: 'Poppins';

        }
    </style>




</body>

</html>