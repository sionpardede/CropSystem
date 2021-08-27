<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Crop System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    {{-- <link href="{{url('css/style.css')}}" rel="stylesheet" />--}}
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <img src="img/logo.png" class="img-responsive" width="260px" href="#page-top"></img>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Information</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Images</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>

                    @auth
                    <li class="nav-item ml-2"><a href="{{ url('/dashboard') }}" class="nav-link js-scroll-trigger">Dashboard</a></li>
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Login</a></li>

                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Registrasi</a></li>
                    @endif
                    @endauth
                </ul>
            </div>
            @endif
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">Selamat datang di Website Cropsystem Food estate</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Sekarang semua dapat bercocok tanam! Anda bisa mendapatkan dalam bercocok tanam disini.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Temukan Lebih banyak</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Informasi Cropping!</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">Pertanian ditentukan oleh jenis tanah dan parameter iklim yang menentukan pengaturan agro-ekologi keseluruhan untuk makanan dan kesesuaian atau serangkaian tanaman atau serangkaian tanaman untuk budidaya</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">

        <h2 class="text-center mt-0">Informasi Rekomendasi Sistem Rotasi Tanaman</h2>
        <hr class="divider my-4" />


        <div class="form-group ml-5 mr-5 mt-5">
            <label for="musim">Musim</label>
            <select class="form-control col-10" id="musim" name="musim">
                <option value="Kemarau">Kemarau</option>
                <option value="Hujan">Hujan</option>
            </select>
        </div>
        <div class="form-group ml-5 mr-5 mt-1">
            <label for="ph">PH Tanah</label>
            <select class="form-control col-10" id="ph" name="ph">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>

            </select>
        </div>

        <button type="submit" id="submit" name="submit" class="btn btn-primary ml-5">Rekomendasikan</button>


    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/1.jpg">
                        <img class="img-fluid" src="img/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Kacang</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/2.jpg">
                        <img class="img-fluid" src="img/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Pertanian</div>
                            <div class="project-name">Sawah</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/2s.jpg">
                        <img class="img-fluid" src="img/2s.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Pertanian</div>
                            <div class="project-name">Gandum</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/3s.jpg">
                        <img class="img-fluid" src="img/3s.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Bawang</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/4.jpg">
                        <img class="img-fluid" src="img/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Jagung</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/5.jpg">
                        <img class="img-fluid" src="img/5.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Perkebunan</div>
                            <div class="project-name">Jeruk</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Hubungi Kami disini!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Punya Kendala dan masalah? hubungi kami pada kontak dibawah ini.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+6282287955430</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:cropsystem@gmail.com">cropsystem@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">
                Copyright &copy;
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
                - Company Name
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('select[name="musim"]').on('change', function() {
                var musimID = jQuery(this).val();
                if (musimID) {
                    jQuery.ajax({
                        url: '/getPh/' + musimID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            jQuery('select[name="ph"]').empty();
                            jQuery.each(data, function(key, value) {
                                $('select[name="ph"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="ph"]').empty();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $("#submit").on("click", function() {
            var link = document.getElementById("ph").value;

            $.ajax({
                url: window.location.href = "getData/" + link
            });
        });
    </script>

</body>

</html>