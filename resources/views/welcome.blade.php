<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Dental and Oral Care, About Us, We are dedicated to caring for you, Dental services, You've got a lot to smile about!, To do’s in delft">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>
        Consultorio PALUI &#129302
    </title>
    <link rel="stylesheet" href="{{ asset('css/nicepage/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/nicepage/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 3.10.2, nicepage.com">
    <link rel="shortcut icon" href="{{ asset('icons/tooth.png') }}" type="image/x-icon">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body">
    <header class="u-clearfix u-header u-header" id="sec-7cdf" style="black; font-weight: bold">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="{{ url('home') }}" class="u-image u-logo u-image-1">
                <img src="{{ asset('icons/tooth.png') }}" class="u-logo-image u-logo-image-1" width="32px">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">

                        @if (Route::has('login'))
                        @auth
                            <li class="u-nav-item"><a
                                    class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                    href="{{ url('home') }}" style="padding: 10px 20px;">Home</a>
                            </li>
                        @else
                            <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('login') }}" style="padding: 10px 20px;">Login</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('register') }}" style="padding: 10px 20px;">Register</a>
                            </li>
                            @endif    
                        @endauth
                        @endif

                    </ul>
                </div>
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('home') }}">Home</a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('home') }}">Home</a></li>                                
                                @else
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('login') }}">Log In</a></li>                                
                                    @if (Route::has('register'))
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth    
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-image u-section-1" id="carousel_53c4">
        <div class="u-expanded-height u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
        <img src="{{ asset('img/bg3.png') }}" alt="" class="u-image u-image-contain u-image-default u-image-1"
            data-image-width="490" data-image-height="339">
        <div class="u-container-style u-group u-group-1">
            <div class="u-container-layout u-valign-middle-md u-container-layout-1">
                <h1 class="u-text u-text-white u-title u-text-1">Cuidado dental y bucal</h1>
                <p class="u-text u-text-body-alt-color u-text-2">
                    La Clínica Dental proporciona servicios dentales de emergencia, preventivos e integrales para
                    pacientes de todas las edades, desde niños hasta adultos.
                </p>
                <a href="{{ url('home') }}"
                    class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-1">read more</a>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_f379">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-20 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h2 class="u-custom-font u-font-pt-sans u-text u-text-white u-text-1">Sobre Nosotros</h2>
                            <div class="u-border-20 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-layout-cell u-palette-5-light-2 u-right-cell u-size-40 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle-sm u-container-layout-2">
                            <p class="u-text u-text-palette-1-base u-text-2">
                                En el Centro Médico, nuestro dedicado personal de más de 1.200 empleados y 80 médicos
                                trabajan juntos para proporcionar una atención médica de alta calidad coordinada,
                                compasiva y rentable.
                                <br><br>
                                El campus del Centro Médico incluye un hospital de cuidados intensivos, servicios de
                                emergencia, servicios de hospitalización y ambulatorios, servicios de laboratorio y
                                radiología, servicios de salud mental, clínicas especializadas, odontología y un equipo
                                las 24 horas
                            </p>
                            <a href="#"
                                class="u-border-2 u-border-palette-1-base u-link u-text-palette-1-base u-link-1">read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_f4c9">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-40 u-image-1">
                        <div class="u-container-layout"></div>
                    </div>
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <img src="{{ asset('img/bg2.png') }}" alt=""
                                class="u-image u-image-contain u-image-default u-image-2" data-image-width="643"
                                data-image-height="501">
                            <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">
                                Nos dedicamos a cuidar de ti
                            </h2>
                            <p class="u-text u-text-2">
                                Las citas pueden tomar más tiempo que en una oficina privada, sin embargo, los servicios
                                a menudo cuestan la mitad del promedio de Columbus. Toda la atención es realizada por
                                estudiantes bajo la supervisión de nuestros dentistas facultad excepcionalmente
                                calificados con licencia.
                            </p>
                            <div class="u-border-20 u-border-white u-line u-line-horizontal u-line-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-palette-5-light-2 u-section-4" id="carousel_b7d7">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
                    <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Servicio Dental</h2>
                    <p class="u-text u-text-2">
                        ¿Tiene niños matriculados en el sistema de escuelas públicas de Denver? Aprenda más sobre
                        nuestro y cómo su hijo es elegible para recibir servicios gratuitos de salud oral preventiva y
                        servicios de sellado dental preventivo.
                    </p>
                </div>
            </div>
            <div class="u-clearfix u-expanded-width-lg u-expanded-width-xl u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle u-container-layout-2">
                                <h3 class="u-text u-text-3">Limpieza Dental</h3>
                                <p class="u-text u-text-4">
                                    Realizado por nuestros estudiantes, bajo la supervisión de nuestros expertos en el
                                    área con más de 20 años de experiencia
                                </p>
                                <a href="{{ url('home') }}"
                                    class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-1">read
                                    more</a>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-3">
                                <h3 class="u-text u-text-5">Exodoncia</h3>
                                <p class="u-text u-text-6">
                                    Tratamiento moderadamente largo pero, nosotros ofrecemos un precio razonablemente
                                    barato y una seguridad para poder realizar y acabar una ortodoncia
                                </p>
                                <a href="{{ url('home') }}"
                                    class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-2">
                                    read more
                                </a>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-3">
                            <div class="u-container-layout u-valign-middle u-container-layout-4">
                                <h3 class="u-text u-text-7">Implante</h3>
                                <p class="u-text u-text-8">
                                    Si necesitas algún tipo de reemplazo, tenemos los mejores materialse
                                    para poder realizar un implante a la medida de cada paciente
                                </p>
                                <a href="{{ url('home') }}"
                                    class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-3">read
                                    more</a>
                            </div>
                        </div>
                        <div
                            class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
                            <div class="u-container-layout u-valign-middle u-container-layout-5">
                                <h3 class="u-text u-text-9">Consulta</h3>
                                <p class="u-text u-text-10">
                                    100% gratuita, ya que nos preocupamos por tu seguridad dental y por supuesto tu
                                    sonrisa
                                    <br><br>
                                </p>
                                <a href="{{ url('home') }}"
                                    class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-4">read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_0f7b">
        <div class="u-clearfix u-expanded-width u-layout-wrap">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-container-layout-1">
                            <img src="{{ asset('img/bg3.png') }}" alt=""
                                class="u-image u-image-contain u-image-default u-image-1" data-image-width="490"
                                data-image-height="339">
                            <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">
                                Tienes mucho que sonreir aún!
                            </h2>
                            <p class="u-text u-text-2">
                                La meta de nuestro consultorio dental es proveer a los pacientes/trabajadores,
                                comprensión, prevención y conciencia sobre sus dientes,
                                mientras que al mismo tiempo darles educación dental y experiencias para su higiene
                                dental
                            </p>
                            <a href="#"
                                class="u-border-2 u-border-palette-2-base u-link u-text-palette-2-base u-link-1">read
                                more</a>
                        </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-40 u-image-2">
                        <div class="u-container-layout"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-6" id="carousel_33d3">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1">
                        <div class="u-container-layout"></div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-size-20 u-image-2">
                        <div class="u-container-layout"></div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3">
                        <div class="u-container-layout"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_b545">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1">
                        <div class="u-container-layout"></div>
                    </div>
                    <div
                        class="u-container-style u-layout-cell u-palette-2-base u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-container-layout-2">
                            <img src="{{ asset('img/bg3.png') }}" alt=""
                                class="u-image u-image-contain u-image-default u-image-2" data-image-width="490"
                                data-image-height="339">
                            <h2 class="u-custom-font u-font-pt-sans u-text u-text-1">Lo que nos queda...</h2>
                            <p class="u-text u-text-2">
                                Después de ofrecer todos nuestros servicios, siempre hacemos un par de preguntas a
                                nuestros
                                clientes para poder mejorar como consultorio dental y ofrecerles lo mejor a los
                                pacientes
                            </p>
                            <div class="u-border-20 u-border-white u-line u-line-horizontal u-line-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-backlink u-clearfix u-grey-80">
        <span>Contáctanos con un correo</span>
        <a class="u-link" href="mailto:grupo18sc@tecnoweb.org.bo" target="_blank">
            <span>Aquí</span>
        </a>.
    </section>
</body>
</html>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif