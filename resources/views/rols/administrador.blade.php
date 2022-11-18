<section class="uza-portfolio-area" style="padding-top: 100px;">

        <div class="portfolio-menu text-center mb-50">
            <button class="btn active" data-filter="*">Todo</button>
            <button class="btn active" data-filter=".USUARIOS">Administración</button>
            <button class="btn" data-filter=".Afil">Afiliados</button>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item Rols_and_users">
                    <div class="single-portfolio-slide">
                        <img src=" {{ asset('uza/img/bg-img/64.jpg') }} " alt="">
                        <div class="overlay-effect">
                            <div class="post-content" style="height: 150px">
                                <div class="single-cf-area d-flex align-items-center mb-75">

                                    <h2><span class="counter"> {{ count($datos['AllUser']) }} </span></h2>

                                    <div class="cf-text">
                                        <h4>Usuarios</h4>
                                        <small style="font-size: 15px">Activos : <span class="counter">
                                                {{ count($datos['UserActive']) }} </span><br></small>
                                        <small style="font-size: 15px">Inactivos : <span class="counter text-danger">
                                                {{ count($datos['UserInactiveAll']) }} </span></small><br>

                                    </div>
                                </div><br>
                                @if (Auth::check())
                                    @if (Auth::user()->estado == 1 && Auth::user()->id_rol == 1)
                                        <div class="single-footer-widget mt-10">
                                            <nav>
                                                <ul class="our-link">
                                                    <li><a href="{{ route('page.usuarios') }}">Listado de usuarios</a></li>
                                                    <li><a href=" {{ route('page.create-users') }}">Crear nuevos usuarios</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    @endif
                                @endif
                            </div>

                        </div>
                        <a href="" class="btn btn-secondary btn-block "></a>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item USUARIOS">
                    <div class="single-portfolio-slide">
                        <img src=" {{ asset('uza/img/bg-img/55.jpg') }} " alt="">
                        <div class="overlay-effect">
                            <div class="post-content" style="height: 150px">
                                <div class="single-cf-area d-flex align-items-center mb-75">

                                    <h2><span class="counter"> {{ count($datos['RolsUser']) }} </span></h2>

                                    <div class="cf-text">
                                        <h4>Roles de Usuarios</h4>
                                    </div>
                                </div><br>
                                <div class="single-footer-widget mt-10">
                                    <nav>
                                        <ul class="our-link">
                                            <li><a href=" {{ route('page.rols-user') }} ">Catálogo de Roles</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <a href="" class="btn btn-secondary btn-block "></a>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item Afil">
                    <div class="single-portfolio-slide">
                        <img src=" {{ asset('uza/img/bg-img/68.jpg') }} " alt="">
                        <div class="overlay-effect">
                            <div class="post-content" style="height: 150px">
                                <div class="single-cf-area d-flex align-items-center mb-75">

                                    <h2><span class="counter"> {{ count($datos['TodosLosAfiliados']) }} </span></h2>

                                    <div class="cf-text">
                                        <h4>Afiliados</h4>
                                        <small style="font-size: 15px">Afiliados : <span class="counter">
                                                {{ count($datos['AfiliadosActivos']) }} </span><br></small>
                                        <small style="font-size: 15px">No Afiliados : <span class="counter text-danger">
                                                {{ count($datos['AfiliadosEliminados']) }} </span></small><br>

                                    </div>
                                </div><br>
                                <div class="single-footer-widget mt-10">
                                    <nav>
                                        <ul class="our-link">
                                            <li><a href=" {{ route('afiliados.pr.get') }} ">Listado de afiliados</a></li>
                                            <li><a href=" {{ route('afiliados.pr.create') }} ">Crear nuevos afiliados</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <a href="" class="btn btn-secondary btn-block "></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
