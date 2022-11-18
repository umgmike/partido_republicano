<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('Title','Welcome') | PARTIDO REPUBLICANO </title>
        <link rel="icon" href="{{ asset('uza/img/core-img/favicon.ICO') }} ">

        <link rel="stylesheet" href="{{ asset('uza/style.css') }} ">
    </head>
    <body style="background-color: rgba(41,41,41,0.5) ; color: #efefef ; ">
        <div id="preloader">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>

        @include('nav-bar')

        <!-- ***** Welcome Area Start ***** -->
        <section class="welcome-area">
            <div class="welcome-slides owl-carousel">

                <!-- Single Welcome Slide -->
                <div class="single-welcome-slide">
                    <!-- Background Curve -->
                    <div class="background-curve">
                        <img src=" {{ asset('uza/img/core-img/curve-3.png') }} " alt="">
                    </div>

                    <!-- Welcome Content -->
                    <div class="welcome-content h-75">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <!-- Welcome Text -->
                                <div class="col-12 col-md-6">
                                    <div class="welcome-text">
                                        <h2 > PARTIDO REPUBLICANO</span></h2>
                                        @if (Route::has('login'))
                                            @auth
                                                <h5 >Usted ya se encuentra logueado <strong> {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</strong>
                                                </h5>
                                            @else
                                                <h5 >Inicie Sesión</h5>
                                            @endauth
                                        @endif
                                        @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('home') }}" class="btn uza-btn btn-2">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn uza-btn btn-2"> Login</a>
                                            @endauth
                                        @endif
                                    </div>
                                </div>
                                <!-- Welcome Thumbnail -->
                                <div class="col-12 col-md-6">
                                    <div class="welcome-thumbnail">
                                        <img src="{{ asset('uza/img/bg-img/uno.PNG') }} " alt="" data-animation="slideInRight" data-delay="400ms">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->

        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-area section-padding-35-0">
            <div class="container">
                 <div class="row" style="margin-bottom: 5px;"> 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PARTIDO REPUBLICANO
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>

            </div>
        </footer>
        <!-- ***** Footer Area End ***** -->

        <script src=" {{ asset('uza/js/jquery.min.js') }}"></script>
        <!-- Popper js -->
        <script src=" {{ asset('uza/js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src=" {{ asset('uza/js/bootstrap.min.js') }}"></script>
        <!-- All js -->
        <script src=" {{ asset('uza/js/uza.bundle.js') }}"></script>
        <!-- Active js -->
        <script src=" {{ asset('uza/js/default-assets/active.js') }}"></script>
    </body>
</html>
