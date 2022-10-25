<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <title>@yield('title', 'SIGOF')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>SIg<span>OF</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <ul class="nav">

                                <li class="scroll-to-section"><a href="{{route('oficio.create')}}">Criar Oficio</a></li>
                                <li class="scroll-to-section"><a href="{{route('oficio.index')}}">Oficios</a></li>
                                @if(Auth::check())
                                <li class="scroll-to-section"><a href="{{route('profile.show')}}">Perfil</a></li>
                                <li class="scroll-to-section"><a href="{{route('register')}}">Novo Usuario</a></li>



                                <li style="color: red;"><a style="color: red;" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit(); " role="button">{{Auth::user()->name}}, sair</a>
                                </li>



                                <!-- <li class="scroll-to-section"><a href="{{route('logout')}}"> sair</a></li> -->


                                @elseif(Auth::guest())
                                <li class="scroll-to-section"><a href="{{route('login')}}">Entrar</a></li>
                                @endif
                        </form>

                        <li class="scroll-to-section">

                            @if(Route::getCurrentRoute()->getName()=='inicio') <div class="main-red-button"><a href="#contact">Contate-nos</a></div>@endif
                        </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @if (session('mensagem'))
    <div class="alert alert-success alert-dismissible fade show" style="text-align: center;" role="alert">
        <strong>Atenção!</strong>

        {{ session('mensagem') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" style="text-align: center; width: 100%; margin-top: 100px; position: absolute;" role="alert">
        <strong>Atenção!</strong>
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session('danger'))
    <div class="alert alert-danger alert-dismissible fade show" style="text-align: center;" role="alert">
        <strong>Atenção!</strong>
        {{ session('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" style="text-align: center;" role="alert">
        <strong>Atenção!</strong>
        {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2021 Space Dynamic Co. All Rights Reserved.

                        <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/animation.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('assets/js/templatemo-custom.js')}}"></script>

</body>

</html>