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

    <!-- Fontfaces CSS-->
    <link href="{{asset('style/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('style/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('style/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('style/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/icofont.min.css') }}">
    <link href="{{ asset('style/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/slick.css')}}" rel="stylesheet" />

    <link href="{{ asset('style/css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/theme.css')}}" rel="stylesheet" />

    <!-- Document Title -->
    <title>Admin | Distributor Bumbu Masak Rasa Baru</title>
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
                </div>
                <ul class="ic-nav mb-0">
                    <li><a href="#"><i class="icofont-notification"></i></a>
                    </li>
                    <li><a href="#"><i class="icofont-settings"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                            <form class="au-form-icon--sm" action="" method="post">
                                <input class="au-input--w300 au-input--style2" type="text"
                                    placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit2" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Selamat datang
                            <span>Admin!</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">12</h2>
                            <span class="desc">User online</span>
                            <div class="icon">
                                <i class="icofont-users-social"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--orange">
                            <h2 class="number">10</h2>
                            <span class="desc">Sales</span>
                            <div class="icon">
                                <i class="icofont-live-messenger"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">2</h2>
                            <span class="desc">Supplier</span>
                            <div class="icon">
                                <i class="icofont-car-alt-4"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--red">
                            <h2 class="number">Rp.1,060,386</h2>
                            <span class="desc">total uang</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Properties</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="time">
                                        <option selected="selected">Today</option>
                                        <option value="">3 Days</option>
                                        <option value="">1 Week</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                    <select class="js-select2" name="type">
                                        <option selected="selected">Export</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>description</th>
                                        <th>date</th>
                                        <th>status</th>
                                        <th>price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>Lori Lynch</td>
                                        <td>
                                            <span class="block-email">lori@example.com</span>
                                        </td>
                                        <td class="desc">Samsung S8 Black</td>
                                        <td>2018-09-27 02:12</td>
                                        <td>
                                            <span class="status--process">Processed</span>
                                        </td>
                                        <td>$679.00</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>Lori Lynch</td>
                                        <td>
                                            <span class="block-email">john@example.com</span>
                                        </td>
                                        <td class="desc">iPhone X 64Gb Grey</td>
                                        <td>2018-09-29 05:57</td>
                                        <td>
                                            <span class="status--process">Processed</span>
                                        </td>
                                        <td>$999.00</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>Lori Lynch</td>
                                        <td>
                                            <span class="block-email">lyn@example.com</span>
                                        </td>
                                        <td class="desc">iPhone X 256Gb Black</td>
                                        <td>2018-09-25 19:03</td>
                                        <td>
                                            <span class="status--denied">Denied</span>
                                        </td>
                                        <td>$1199.00</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>Lori Lynch</td>
                                        <td>
                                            <span class="block-email">doe@example.com</span>
                                        </td>
                                        <td class="desc">Camera C430W 4k</td>
                                        <td>2018-09-24 19:10</td>
                                        <td>
                                            <span class="status--process">Processed</span>
                                        </td>
                                        <td>$699.00</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                    title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>

    <!-- FOOTER SECTION -->
    <!-- COPYRIGHT-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
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
                        <li><a href="https://wa.me/087788631832"><i class="icofont-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END COPYRIGHT-->

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