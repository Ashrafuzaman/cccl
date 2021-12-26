<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Font Link --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS LINK --}}
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/venobox.min.css') }}">

    {{-- Main Css --}}
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/media.css') }}">

</head>

<body>


<!-- ------------------------------------------------------------------------------------------------------------
    PRELOADER PART START
-------------------------------------------------------------------------------------------------------------- -->
<div class="loader" ><span>Loading...</span></div>


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START NAVBAR PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->

<nav class="navbar nav navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('frontend_assets/images/Logo.jpg') }}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navigation navbar-nav m-auto">

                <li>
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>

                <li>
                    <a class="nav-link" href="">Products</a>
                    <ul>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Interior</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Exterior</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Enamel Paints</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Illusions</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Wood Coating</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Marine Paints</a></li>
                        <li><a href="{{ route('frontend_category') }}" target="_blank">Industrial Paints</a></li>
                    </ul>

                </li>

                <li>
                    <a class="nav-link" href="#">Services</a>
                    <ul>
                        <li><a href="{{ route('frontend_service') }}">CCCL Express Painting</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('frontend_gallery') }}">Gallery</a>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('frontend_corporate_speech') }}">Corporate Speech</a>
                </li>

                <li>
                    <a class="nav-link" href="#">Get in Touch</a>
                    <ul>
                        <li><a href="{{ route('frontend_contact_us') }}">Contact Us </a></li>
                        <li><a href="#">Experience Zones </a></li>
                        <li><a href="#">Sales Offices </a></li>
                    </ul>
                </li>


            </ul>

            <form class="d-flex search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>



@yield('content')


{{-- Section Height --}}
<div class="section_height"></div>


<!-- ------------------------------------------------------------------------------------------------------------
    Back to Top PART START
-------------------------------------------------------------------------------------------------------------- -->

<a href="#" class="back_to_top">
    <svg width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0.172916 4.07968L4.07976 0.172739C4.19128 0.0612149 4.33992 0 4.49841 0C4.65708 0 4.80563 0.0613028 4.91715 0.172739L5.27187 0.527539C5.3833 0.638887 5.44469 0.787614 5.44469 0.946193C5.44469 1.10468 5.3833 1.25842 5.27187 1.36977L2.99267 3.65399H10.2338C10.5603 3.65399 10.8182 3.90958 10.8182 4.23614V4.73774C10.8182 5.0643 10.5603 5.34566 10.2338 5.34566H2.96681L5.27178 7.64263C5.38321 7.75415 5.44461 7.89884 5.44461 8.05741C5.44461 8.21582 5.38321 8.36261 5.27178 8.47404L4.91707 8.8277C4.80554 8.93923 4.65699 9 4.49833 9C4.33984 9 4.1912 8.93843 4.07967 8.82691L0.172828 4.92006C0.0610409 4.80819 -0.000437419 4.65884 2.34302e-06 4.50009C-0.000349466 4.34081 0.0610405 4.19138 0.172916 4.07968Z"
            fill="#DDDDDD" />
    </svg>
</a>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- 
    START FOOTER PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->

<footer id="footer">

    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <div class="footer_content">

                    <div class="logo">

                        <a href="{{ route('index') }}">
                            <img src="{{ asset('frontend_assets/images/Logo.jpg') }}" alt="">
                        </a>

                    </div>

                    <div class="text">

                        <h3>Stay Connected With Us</h3>
                        <p>Subscribe to stay updated</p>
                        <input type="text" placeholder="Enter Your Email Address" class="form-control">

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="footer_content">

                    <div class="text">

                        <h3>Stay Connected With Us</h3>

                        <ul>

                            <li>
                                <a href="">Company Profile</a>
                            </li>

                            <li>
                                <a href="">Board Of Directors</a>
                            </li>

                            <li>
                                <a href="">Mission And Vision</a>
                            </li>

                            <li>
                                <a href="">History And Milestones</a>
                            </li>

                            <li>
                                <a href="">Message From MD</a>
                            </li>

                            <li>
                                <a href="">Subsidiary Information</a>
                            </li>

                            <li>
                                <a href="">Contact Us</a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="footer_content">

                    <div class="text">

                        <h3>Stay Connected With Us</h3>

                        <ul>

                            <li>
                                <a href="">Board Meetings And AGM</a>
                            </li>

                            <li>
                                <a href="">Corporate Governance</a>
                            </li>

                            <li>
                                <a href="">Reports And Statements</a>
                            </li>

                            <li>
                                <a href="">Contact Point Of Investors</a>
                            </li>

                            <li>
                                <a href="">Shareholding Patterns</a>
                            </li>

                            <li>
                                <a href="">Policies</a>
                            </li>

                            <li>
                                <a href="">Unsettled/Unclaimed Dividend</a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="footer_content">

                    <div class="text">

                        <h3>Stay Connected With Us</h3>

                        <ul>

                            <li>
                                <a href="">News And Events</a>
                            </li>

                            <li>
                                <a href="">Cccl Home Diaries</a>
                            </li>

                            <li>
                                <a href="">Corporate Social Responsibility</a>
                            </li>

                            <li>
                                <a href="">Advertisements</a>
                            </li>

                            <li>
                                <a href="">Apps For Stakeholders</a>
                            </li>

                            <li>
                                <a href="">Sitemap</a>
                            </li>

                            <li>
                                <a href="">XML Sitemap</a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        {{-- Copy Right --}}
        <div class="copy_right d_flex">

            <div class="social_icon">

                <div class="social_bgs f">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>

                <div class="social_bgs">
                    <a href=""><i class="fab fa-instagram-square"></i></a>
                </div>

                <div class="social_bgs">
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>

                <div class="social_bgs">
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>

            <div class="right d_flex">

                <p>© 2018 Shoma. All Rights Reserved</p>
                <p>Developed By <a href="">Universe Infotech</a> </p>

            </div>

        </div>


    </div>

</footer>



{{-- JS LINK --}}
<script src="{{ asset('frontend_assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/all.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/venobox.min.js') }}"></script>

<script src="{{ asset('frontend_assets/js/custom.js') }}"></script>

</body>

</html>
