<!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="logout-System" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @if(Auth::check())
                                @if (Auth::user()->id_rol == 1)
                                	Vuelva pronto <strong>{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</strong>
                                	<button type="submit" class="bg-navy">Logout</button>
                                @endif
                            @endif

                            @if(Auth::check())
                                @if (Auth::user()->id_rol == 2)
                                	Vuelva pronto <strong>{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</strong>
                                	<button type="submit" class="bg-navy">Logout</button>
                                @endif
                            @endif

                            @if(Auth::check())
                                @if (Auth::user()->id_rol == 3)
                                	Vuelva pronto <strong>{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</strong>
                                	<button type="submit" class="bg-navy">Logout</button>
                                @endif
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ***** Top Search Area End ***** -->