<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="{{ asset('style/images/favicon.png')}}" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/icofont.min.css') }}">
    <link href="{{ asset('style/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/slick.css')}}" rel="stylesheet" />

    <link href="{{ asset('style/css/main.css')}}" rel="stylesheet" />
    <!-- Document Title -->
    <title>UD. MAHMUDA | Distributor Bumbu Masak Rasa Baru</title>
</head>

<body>
    <!-- HEADER SECTION -->
    <header id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <!-- Change Logo Img Here -->
                <a class="navbar-brand col-sm-3 col-1" href="#"><img src="{{ asset ('style/images/bg_title.png')}}"
                        alt=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#home">Home.<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#about-us">About Us.</a>
                        </li>
                        <li class="nav-item">
                            <!-- Nav Link -->
                            <a class="nav-link" data-scroll href="#contact-us">Contact Us.</a>
                        </li>
                    </ul>
                    <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
                        <!-- Contacgt Us Button -->
                        <button>Contact Us</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- HERO SECTION -->
        <div class="container-fluid hero">
            <img src="{{asset('style/images/bgbumbu.png')}}" alt="">
            <div class="container">
                <!-- Hero Title -->
                <h1>Distributor<br>Bumbu Masak.</h1>
                <!-- Hero Title Info -->
                <p>Pembukuan dan informasi bagi para sales dan suppier.</p>
                <div class="hero-btns">
                    <!-- Hero Btn First -->
                    <div class="d-flex justify-content-start">

                        <div class="col-md-2 col-sm-6 nav-item dropdown">
                            <!-- Lang Dropdown Link -->
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">PILIH</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="dropdown-item" href="#" onclick="btnClick('ADMIN')">ADMIN </div>
                                <!-- Lang Dropdown Choice -->
                                <div class="dropdown-item" href="#" onclick="btnClick('SUPPLIER')">SUPPLIER </div>
                                <!-- Lang Dropdown Choice -->
                                <div class="dropdown-item" href="#" onclick="btnClick('SALES')">SALES </div>
                            </div>
                        </div>
                        <!-- Hero Btn Second -->
                        <a data-scroll href="/login" id="logUrl">Masuk.</a>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- SERVICES SECTION -->
    {{-- <section id="about-us" class="services">
        <div class="container-fluid">
            <div class="side-img">
                <img src="{{ asset ('style/images/aside.svg')}}" alt="">
            </div>
            <div class="side2-img">
                <img src="{{ asset ('style/images/aside2.svg')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-4 service-txt">
                        <h2>Anything you need,we’ve got you covered</h2>
                        <div class="hero-btns service-btn">
                            <a data-scroll href="#contact-us">Get in Touch</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="service-box">
                            <img src="{{ asset ('style/images/service-icon1.svg')}}" alt="">
                            <!-- Service Title -->
                            <h3>Web & Graphic<br>Design</h3>
                            <!-- Replace Patch to Image Under -->
                            <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor
                                accumsan tincidunt.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="service-box">
                            <img src="{{ asset ('style/images/service-icon2.svg')}}" alt="">
                            <!-- Service Title -->
                            <h3>Web & App<br>Development</h3>
                            <!-- Service Info -->
                            <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor
                                accumsan tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ABOUT SECTION -->
    {{-- <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <img src="{{ asset ('style/images/aboutimg.svg')}}" alt="">
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                    <h5>OUR COMPANY</h5>
                    <h2>Some Fine<br>Words About Us</h2>
                    <!-- Replace About Us Text Under -->
                    <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                        tincidunt.Vestibulum ac diam sit amet.Quam vehicula elementum amet est on dui. Nulla porttitor
                        accumsan tincidunt.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- PORTFOLIO SECTION -->
    <section id="portfolio" class="portfolio">
        <div class="container-fluid">
            <div class="portfolio-aside">
                <img src="{{ asset ('style/images/aside3.svg')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h2>See some of our Creative work.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/1.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Bumbu Masak Rasa Baru</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/2.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/3.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/4.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/5.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 work-box">
                        <div class="photobox photobox_type10">
                            <div class="photobox__previewbox">
                                <!-- Replace Patch to Image Under -->
                                <img src="{{ asset ('style/images/6.png')}}" class="photobox__preview" alt="Preview">
                                <!-- Replace Image Title Under -->
                                <span class="photobox__label">Awesome Work</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hidden Images From Portfolio -->
                <div id="hiden-gallery" class="hide">
                    <div class="row">
                        <div class="col-12 col-lg-4 work-box">
                            <div class="photobox photobox_type10">
                                <div class="photobox__previewbox">
                                    <!-- Replace Patch to Image Under -->
                                    <img src="{{ asset ('style/images/5.png')}}" class="photobox__preview"
                                        alt="Preview">
                                    <!-- Replace Image Title Under -->
                                    <span class="photobox__label">Awesome Work</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 work-box">
                            <div class="photobox photobox_type10">
                                <div class="photobox__previewbox">
                                    <!-- Replace Patch to Image Under -->
                                    <img src="{{ asset ('style/images/3.png')}}" class="photobox__preview"
                                        alt="Preview">
                                    <!-- Replace Image Title Under -->
                                    <span class="photobox__label">Awesome Work</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 work-box">
                            <div class="photobox photobox_type10">
                                <div class="photobox__previewbox">
                                    <!-- Replace Patch to Image Under -->
                                    <img src="{{ asset ('style/images/1.png')}}" class="photobox__preview"
                                        alt="Preview">
                                    <!-- Replace Image Title Under -->
                                    <span class="photobox__label">Awesome Work</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 more-btn">
                        <!-- Show Me More/Less Button -->
                        <a class="more-btn-inside">Show More.</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION -->
    {{-- <section id="blog" class="blog">
        <div class="container-fluid">
            <div class="blog-aside">
                <img src="{{ asset('style/images/aside4.svg')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>BLOG STORIES</h5>
                        <h2>Check Our News</h2>
                    </div>
                </div>
                <div id="blog-drag" class="row blog-slider">
                    <div class="col-12 col-lg-4 blog-box blog-first">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                    <!-- Blog Section to be showed on Drag  -->
                    <div class="col-12 col-lg-4 blog-box hiden-blog hide-blog">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                    <div class="col-12 col-lg-4 blog-box hiden-blog  hide-blog">
                        <!-- Blog Post Title -->
                        <h6>NEW ADVENTURE</h6>
                        <!-- Blog Post Date -->
                        <p>17 March 2019</p>
                        <!-- Blog Post -->
                        <p>Vestibulum ac diam sit amet quam vehicula elementum amet est on dui. Nulla porttitor accumsan
                            tincidunt.</p>
                    </div>
                </div>
                <!-- Blog Button to Show More or Less on Mobile&Tablet View  -->
                <button class="hide-me" id="blog-btn">Show More Stories</button>
            </div>
        </div>
    </section> --}}
    <!-- CONTACT SECTION -->
    {{-- <section id="contact-us" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>CONTACT US</h5>
                    <h2>Get in Touch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 email">
                    <input placeholder="Your email" type="email" id="email" pattern=".+@globex.com" size="30" required>
                </div>
                <div class="col-12 col-lg-6 email">
                    <input placeholder="Subject" type="subject" id="subject" size="30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 message">
                    <textarea id="message" name="message" rows="5" cols="1">Message here...</textarea>
                </div>
                <div class="col-12">
                    <div class="hero-btns contact-btn">
                        <!-- Send Message Btn -->
                        <a href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>UD. MAHMUDA</h5>
                    <h3>DISTRIBUTOR BUMBU MASAK</h3>
                    <ul class="contact-nav">
                        <li><a data-scroll href="#home">Home.</a></li>
                        <li><a data-scroll href="#about-us">About Us.</a></li>
                        <li><a data-scroll href="#contact-us">Contact.</a></li>
                    </ul>
                    <h6>© 2022 - UD. MAHMUDA,All Right Reserved</h6>
                    <ul class="social">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('style/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/js/slick.min.js')}}"></script>
    <script src="{{ asset('style/js/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('style/js/main.js')}}"></script>

    <script>
        function btnClick(text) {
            const logUrl = document.getElementById('logUrl')
            const btnText = document.getElementById('navbarDropdown');

            btnText.innerHTML = text;
            let type;
            switch (text) {
                case "ADMIN":
                    type=1
                    break;
                case "SUPPLIER":
                        type=2
                    break;
                default:
                    type=3
                    break;
            }
            logUrl.href = '/login/?type='+type;
            console.log(text);
        }


    </script>
    <!-- Scripts Ends -->
</body>

</html>