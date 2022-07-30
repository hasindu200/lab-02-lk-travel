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

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <title>Home Page</title>
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

    <h1 class="text-success mb-3 mt-3 text-center">Welcome To Sri lanaka</h1>

    <P class="text-dark text-center">See what's waiting for you on your next island getaway.
        Savour the unique experiences this island treasure has to offer.</P>

    <!--  START SLIDER-->

    <section class="mt-4 mb-5">

        <div class="carousel slide  carousel-fade" data-bs-ride="carousel" id="carouselExampleControls">
            <div class="carousel-inner">


                <div class="carousel-item active" data-bs-interval="500">
                    <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1566296314736-6eaac1ca0cb9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1856&q=80">
                </div>


                <div class="carousel-item active" data-bs-interval="500">
                    <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1537551080512-fb7dd14fbf90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                </div>


                <div class="carousel-item active" data-bs-interval="500">
                    <img alt="..." class="d-block w-100" src="https://images.unsplash.com/photo-1544015759-237f87d55ef3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80">
                </div>




            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleControls" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleControls" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!--       END SLIDER  -->


    <h1 class="text-success mb-3 mt-3 text-center">All places need to know when travelling to Sri Lanka</h1>
    <!-- CARD SECTION START -->

    <section class="row mt-5 mb-5">

        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img alt="Waterfall" class="card-img-top" src="https://cdn.theculturetrip.com/wp-content/uploads/2021/03/hyceeh-e1615310380517.jpg" />
                                <div class="card-body">
                                    <h5 class="card-title">Sigiriya</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit magnam optio
                                        repudiandae! Aliquam sit debitis fugiat ipsam itaque molestiae nobis odit optio
                                        praesentium soluta tenetur. Aliquid dolor ssssnulla saepe temporibus totam?
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="card">
                                <img alt="Sunset Over the Sea" class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/bc/05/aa/ella.jpg?w=700&h=500&s=1" />
                                <div class="card-body">
                                    <h5 class="card-title">Ella</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolores dolorum eveniet
                                        repellat vitae voluptate! At cumque delectus doloremque eius,
                                        explicabo odio praesentium repudiandae!
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 d-none d-lg-block ">
                            <div class="card">
                                <img alt="Sunset over the Sea" class="card-img-top" src="https://www.asiapropertyawards.com/wp-content/uploads/2019/10/shutterstock_1385735960.jpg" />
                                <div class="card-body">
                                    <h5 class="card-title">Galle</h5>
                                    <p class="card-text">

                                        Lorem consectetur Adipisci consequuntur cupiditate dignissimos eos error fugit illo,
                                        provident quibusdam, tempore? Cum hic minima molestias
                                        reprehenderit .

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 d-none d-lg-block ">
                            <div class="card">
                                <img alt="Sunset over the Sea" class="card-img-top" src="https://cdn.audleytravel.com/3601/2573/79/15979547-female-worker-at-tea-plantation-nuwara-eliya-sri-lanka.jpg" />
                                <div class="card-body">
                                    <h5 class="card-title">Nuwara Eliya</h5>

                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet fuga, ipsa
                                        itaque, minima obcaecati omnis optio quaerat sapiente sequi suscipit ullam
                                        voluptatum. Atque dolore nemo neque quaerat quod sit.
                                    </p>

                                </div>
                            </div>
                        </div>



                    </div>


                </div>


            </div>


        </div>

    </section>

    <!--  END CARD SECTION-->


    





    <!--  Footer SECTION-->



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="<?php echo base_url('index.php/Home/index'); ?>">Home</a></li>

                        <li><a href="<?php echo base_url('index.php/Home/contact'); ?>"> Contact Us</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('index.php/Home/about'); ?>"> About Us</a></li>
                    </ul>
                </div>


                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">Nimali - 011-2343443</a></li>
                        <li><a href="#">Lniwa - 011-2223343</a></li>
                        <li><a href="#">Malith - 011-24444222</a></li>
                        <li><a href="#">kaml - 011232344</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>





    <!--====== Javascripts & Jquery ======-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script crossorigin="anonymous" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    * {
        font-family: 'Poppins';

    }


    .nav-item {
        margin-left: 50px;
        margin-right: 50px;
    }


    .carousel-item>img {

        height: 80vh;
        width: 100vw;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        height: 50px;
        width: 50px;
        outline: black;
        background-color: rgba(0, 0, 0, 0.3);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
    }



    .footer {
        background-color: #24262b;
        padding: 70px 0;
    }

    .footer-col {
        width: 30%;
        padding: 0 15px;
    }

    .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer-col h4::before {
        content: '';

        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
    }

    .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        font-family: Poppins serif Poppins;
        display: block;
        transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
    }

    .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
    }
</style>
</body>

</html>