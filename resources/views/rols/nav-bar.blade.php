<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="uzaNav">

                <!-- Logo -->
                <a class="nav-brand" href=" {{ route('welcome') }}"><img
                        src=" {{ asset('assets/uza/img/core-img/hotel.ico') }}" alt=""
                        title="Retornal al principio | HOTEL IQUITIU"></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>



                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">

                            @if (Auth::check())
                                @if (Auth::user()->estado == 1)
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                @endif
                            @endif

                            @if (Auth::check())
                                @if (Auth::user()->estado == 1 && Auth::user()->id_rol == 1)

                                    <li><a> Administración </a>
                                        <ul class="dropdown">
                                            <li><a href=" {{ route('page.usuarios') }} ">Usuario</a></li>
                                            <li><a href=" {{ route('page.rols-user') }} ">Roles</a></li>
                                            <li><a href=" {{ route('afiliados.pr.get') }} ">Afiliados</a></li>
                                            <li><a href=" {{ route('Reporte-Afiliados') }} ">Reporte Afiliados</a></li>
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->estado == 1 && Auth::user()->id_rol == 2)
                                    <li><a> Administración </a>
                                        <ul class="dropdown">
                                            <li><a href=" {{ route('afiliados.pr.get') }} ">Afiliados</a></li>
                                            <li><a href=" {{ route('Reporte-Afiliados') }} ">Reporte Afiliados</a></li>
                                        </ul>
                                    </li>
                                @endif
                            @endif

                            @if (Auth::check())
                                @if (Auth::user()->id_rol == 1)
                                    <li><a>Rol : <strong>Administrador</strong></a></li>
                                @elseif (Auth::user()->id_rol == 2)
                                    <li><a>Rol : <strong>Operador</strong></a></li>
                                @endif
                            @endif

                        </ul>
                        <!-- Search Icon -->
                        <ul id="nav">
                            <div data-toggle="modal" data-target="#logout-System">
                                @if (Auth::check())
                                    @if (Auth::user()->estado == 0)
                                        <li><a>Retornar</a></li>
                                    @else
                                        <li><a class="text-danger">Logout</a></li>
                                    @endif
                                @endif
                            </div>
                        </ul>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
