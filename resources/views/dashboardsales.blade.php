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
    <title>Sales | Distributor Bumbu Masak Rasa Baru</title>
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
                <h1>Selamat<br>Datang Sales.</h1>
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
                        <h3 class="title-5 m-b-35">Data Keuangan</h3>
                        <div class="col-12 d-flex justify-content-lg-center my-2 py-4">
                            <div class="row">
                                <div class="col-12  justify-content-between px-4 py-4 ">
                                    <div class="row border">
                                        <div class="col-12 text-center my-2">
                                            <h5>Total Harian</h5>
                                        </div>
                                        <table class="table table-hover text-center">
                                            <thead>
                                                <div class="col-12 text-center text-bg-danger">
                                                    <a>Senin, 12 - 12 -2033</a>
                                                </div>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Ambil Barang</th>
                                                    <th scope="col">Sisa Barang</th>
                                                    <th scope="col">Total Laku</th>
                                                    <th scope="col">Total Uang</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Tepung</td>
                                                    <td>5 bal</td>
                                                    <td>4 bal</td>
                                                    <td>1 bal</td>
                                                    <td>Rp. 10.000.000</td>
                                                    <td>Utang</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"> <i
                                                                class="fas fa-pencil mr-2"></i>Edit</button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash mr-2"></i>Hapus</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Tepung</td>
                                                    <td>5 bal</td>
                                                    <td>4 bal</td>
                                                    <td>1 bal</td>
                                                    <td>Rp. 10.000.000</td>
                                                    <td>Utang</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"> <i
                                                                class="fas fa-pencil mr-2"></i>Edit</button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash mr-2"></i>Hapus</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Tepung</td>
                                                    <td>5 bal</td>
                                                    <td>4 bal</td>
                                                    <td>1 bal</td>
                                                    <td>Rp. 10.000.000</td>
                                                    <td>Utang</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"> <i
                                                                class="fas fa-pencil mr-2"></i>Edit</button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash mr-2"></i>Hapus</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex py-3 justify-content-between">

                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#tambahdataModal">
                                                <i class="fas fa-plus"></i> Tambah Data
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#lihatdataModal">
                                                <i class="fas fa-plus"></i> Lihat Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center mb-4 px-0">
                                    <div class="card-header">
                                        Data-Pembukuan
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Pembukuan Bulanan</h5>
                                        <p class="card-text">Semua data yang disimpan selama sebulan akan di tampikan
                                            pada tabel.</p>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#dataBulanan">
                                            <i class="fas fa-plus"></i> Lihat Data
                                        </button>
                                    </div>
                                    <div class="card-footer text-muted">
                                        4 hari yang lalu
                                    </div>
                                </div>
                                <div class="card text-center px-0">
                                    <div class="card-header">
                                        Data-Pembukuan
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Pembukuan Tahuanan</h5>
                                        <p class="card-text">Semua data yang disimpan selama setahun akan di tampikan
                                            pada tabel.</p>
                                        <a href="#" class="btn btn-primary">Lihat Data</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        1 tahun yang lalu
                                    </div>
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
    <!-- Tambah Data Harian -->
    <div class="modal fade" id="tambahdataModal" tabindex="-1" aria-labelledby="tambahdataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="tambahdataModalLabel">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaBarang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ambilBarang" class="col-sm-2 col-form-label">Ambil Barang</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="ambilBarang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lakuBarang" class="col-sm-2 col-form-label">Laku Barang</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="lakuBarang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="totalUang" class="col-sm-2 col-form-label">Total Uang</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="totalUang">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keteranganHarian" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="keteranganHarian">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Lihat Data --}}
    <div class="modal fade" id="lihatdataModal" tabindex="-1" aria-labelledby="lihatdataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lihatdataModalLabel">Lihat Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Lihat Data Bulanan --}}
    <div class="modal fade" id="dataBulanan" tabindex="-1" aria-labelledby="dataBulananLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataBulananLabel">Lihat Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover border text-center mb-3">
                        <thead>
                            <div class="col-12 text-center text-bg-danger">
                                <a>Senin, 12 - 12 - 2033</a>
                            </div>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Ambil Barang</th>
                                <th scope="col">Sisa Barang</th>
                                <th scope="col">Total Laku</th>
                                <th scope="col">Total Uang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bumbu</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Pecel</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover border text-center mb-3">
                        <thead>
                            <div class="col-12 text-center text-bg-danger">
                                <a>Selasa, 13 - 12 - 2033</a>
                            </div>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Ambil Barang</th>
                                <th scope="col">Sisa Barang</th>
                                <th scope="col">Total Laku</th>
                                <th scope="col">Total Uang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover border text-center mb-3">
                        <thead>
                            <div class="col-12 text-center text-bg-danger">
                                <a>Rabu, 12 - 12 - 2033</a>
                            </div>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Ambil Barang</th>
                                <th scope="col">Sisa Barang</th>
                                <th scope="col">Total Laku</th>
                                <th scope="col">Total Uang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-hover border text-center mb-3">
                        <thead>
                            <div class="col-12 text-center text-bg-danger">
                                <a>Kamis, 12 - 12 - 2033</a>
                            </div>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Ambil Barang</th>
                                <th scope="col">Sisa Barang</th>
                                <th scope="col">Total Laku</th>
                                <th scope="col">Total Uang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Tepung</td>
                                <td>5 bal</td>
                                <td>4 bal</td>
                                <td>1 bal</td>
                                <td>Rp. 10.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
    {{--
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


    </script> --}}
    <!-- Scripts Ends -->
</body>

</html>