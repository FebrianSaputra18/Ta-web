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

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/icofont.min.css') }}">
    <link href="{{ asset('style/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/slick.css')}}" rel="stylesheet" />

    <link href="{{ asset('style/css/main.css')}}" rel="stylesheet" />
    {{--
    <link href="{{asset('style/css/theme.css')}}" rel="stylesheet" /> --}}

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
                    <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
                        <!-- Contacgt Us Button -->
                        <button>Contact Us</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- HERO SECTION -->

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-2">
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
                                    <li class="list-inline-item">Admin-Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <div class="container-fluid hero">
            <div class="container">
                <!-- Hero Title -->
                <h1>Selamat<br>Datang Admin.</h1>
                <!-- Hero Title Info -->
                <p>Pembukuan dan informasi bagi para sales dan suppier.</p>
            </div>
        </div>
    </header>
    <!-- SERVICES SECTION -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

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
                        <h3 class="title-5 m-b-35">Data Karyawan</h3>
                        <div class="col-12 d-flex justify-content-lg-center border my-2 py-4">
                            <div class="col-12">
                                <div class="row justify-content-between px-4 py-4">
                                    <div class="card justify-content-between mb-3" style="width: 14rem;">
                                        <img src="{{ asset('style/images/profil_img.jpg') }}" class="card-img-top"
                                            alt="Syamsul">
                                        <div class="card-body align-self-center">
                                            <h5 class="card-title">Syamsul Saqok.</h5>
                                            <p class="card-text">087788XXXX.</p>
                                            <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                        </div>
                                    </div>
                                    <div class="card justify-content-between mb-3" style="width: 14rem;">
                                        <img src="{{ asset('style/images/profil_img.jpg') }}" class="card-img-top"
                                            alt="Syamsul">
                                        <div class="card-body align-self-center">
                                            <h5 class="card-title">Syamsul Saqok.</h5>
                                            <p class="card-text">087788XXXX.</p>
                                            <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                        </div>
                                    </div>
                                    <div class="card justify-content-between mb-3" style="width: 14rem;">
                                        <img src="{{ asset('style/images/profil_img.jpg') }}" class="card-img-top"
                                            alt="Syamsul">
                                        <div class="card-body align-self-center">
                                            <h5 class="card-title">Syamsul Saqok.</h5>
                                            <p class="card-text">087788XXXX.</p>
                                            <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                        </div>
                                    </div>
                                    <div class="card justify-content-between mb-3" style="width: 14rem;">
                                        <img src="{{ asset('style/images/profil_img.jpg') }}" class="card-img-top"
                                            alt="Syamsul">
                                        <div class="card-body align-self-center">
                                            <h5 class="card-title">Syamsul Saqok.</h5>
                                            <p class="card-text">087788XXXX.</p>
                                            <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                        </div>
                                    </div>
                                    <div class="card justify-content-between mb-3" style="width: 14rem;">
                                        <img src="{{ asset('style/images/profil_img.jpg') }}" class="card-img-top"
                                            alt="Syamsul">
                                        <div class="card-body align-self-center">
                                            <h5 class="card-title">Syamsul Saqok.</h5>
                                            <p class="card-text">087788XXXX.</p>
                                            <a href="#" class="btn btn-primary">Lihat Data Diri</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#addsalesModal"><i class="fas fa-plus"></i> Tambah Karyawan
                                    </button>
                                </div>
                            </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="{{ asset('style/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/js/slick.min.js')}}"></script>
    <script src="{{ asset('style/js/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('style/js/main.js')}}"></script>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="addsalesModal" tabindex="-1" aria-labelledby="addsalesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addsalesModalLabel">Tambah Karyawan</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="username">Username</label>
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" autofocus>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror"
                                    rows="5" name="address" autofocus>{{ old('address') }}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-6 nav-item dropdown">
                                <label for="role">Role</label>
                                <!-- Lang Dropdown Link -->
                                <a class="border nav-link dropdown-toggle" for="role_id" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"
                                    value="{{ old('role_id') }}">PILIH</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" name="role_id">
                                    <div class="dropdown-item" href="/" onclick="btnClick('ADMIN')">ADMIN </div>
                                    <!-- Lang Dropdown Choice -->
                                    <div class="dropdown-item" href="#" onclick="btnClick('SUPPLIER')">SUPPLIER </div>
                                    <!-- Lang Dropdown Choice -->
                                    <div class="dropdown-item" href="#" onclick="btnClick('SALES')">SALES </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror pwstrength"
                                    data-indicator="pwindicator" name="password">
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="password2" class="d-block">Password Confirmation</label>
                                <input id="password2" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                                <label class="custom-control-label" for="agree">I agree with the terms and
                                    conditions</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->
    <!-- Scripts Ends -->
</body>

</html>