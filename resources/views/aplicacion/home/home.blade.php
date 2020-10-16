@extends('layouts.aplicacion.app')

@section('content')
    <section id="home-hero-banner">
        <img class="img-fluid" src="{{ asset('img/home-hero-banner.jpg') }}">
    </section>

    <section id="funciones">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/layout/home/01.svg') }}"
                            alt="Icon" />
                        <h3 class="h5 mb-2">Mapa</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/layout/home/02.svg') }}"
                            alt="Icon" />
                        <h3 class="h5 mb-2">Recursos</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/layout/home/03.svg') }}"
                            alt="Icon" />
                        <h3 class="h5 mb-2">Gestión de la Innovación</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left">
                        <img class="d-inline-block mb-4 mt-2" width="100" src="{{ asset('img/layout/home/04.svg') }}"
                            alt="Icon" />
                        <h3 class="h5 mb-2">Ecosistema de Innovación</h3>
                        <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary bg-gradient-orange-purple">
        <div class="row no-gutters">
            <div class="col-md-6 py-7 bg-size-cover order-md-2 overflow-hidden"
                style="background-image: url({{ asset('img/layout/home/laboratorio-side-bkg.png') }});">
            </div>
            <div class="col-md-6 px-3 pl-xl-0 pr-lg-5 pr-xl-7 py-2 py-lg-4 order-md-1">
                <div class="ml-md-auto mr-sm-7 py-5 my-sm-0 py-md-6 py-lg-7 text-white" style="max-width: 400px;">
                    <h2 class="mb-3 pb-1 text-white">Laboratorio de Innovación</h2>
                    <p>Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint.</p>
                    <ul class="list-unstyled font-size-sm">
                        <li class="d-flex align-items-center"><i
                                class="fe-check-circle font-size-lg mr-2"></i><span>Excepteur sint</span></li>
                        <li class="d-flex align-items-center"><i class="fe-check-circle font-size-lg mr-2"></i><span>Quam
                                lacus suspendisse</span></li>
                        <li class="d-flex align-items-center"><i
                                class="fe-check-circle font-size-lg mr-2"></i><span>Elementum pulvinar etiam</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Demos-->
    <section class="bg-secondary" id="demos">
        <div class="container pt-5 pb-4 py-md-6 py-lg-7">
            <div class="text-center mb-5 pt-3 pt-lg-4">
                <h2 class="h1 mb-4 uppercase">Eventos</span>
                </h2>
                <p class="text-muted">Mira nuestros próximos eventos</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/02.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Hackaton</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/03.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Conferencia de innovación</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                    <a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;">
                        <img class="card-img-top" src="{{ asset('img/layout/home/01.jpg') }}" alt="Life Science" />
                        <div class="card-body">
                            <h3 class="h5 mb-0 text-center">Webinar de innovación</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <div class="position-relative bg-purple-gradient" style="height: 420px;">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 mb-5">Novedades</h2>
        <div class="cs-carousel">
            <div class="cs-carousel-inner"
                data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;850&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 16}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 23}}}">
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right badge-success">Nuevo</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sed.</a>
                            </h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile1.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Empresa
                                        1</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right badge-success">Nuevo</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sed.</a>
                            </h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile2.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Empresa
                                        1</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right badge-success">Nuevo</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sed.</a>
                            </h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile3.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Empresa
                                        1</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article-->
                <div class="pb-2">
                    <article class="card card-hover h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                        <span class="badge badge-lg badge-floating badge-floating-right badge-success">Nuevo</span>
                        <div class="card-body pt-5 px-4 px-xl-5">
                            <a class="meta-link font-size-sm mb-2" href="#">Categoría 1</a>
                            <h3 class="h4 nav-heading mb-4">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sed.</a>
                            </h3>
                        </div>
                        <div class="px-4 px-xl-5 pt-2">
                            <a class="media meta-link font-size-sm align-items-center" href="#">
                                <img class="rounded-circle" width="42" src="{{ asset('img/layout/home/profile4.jpg') }}"
                                    alt="Sanomi Smith" />
                                <div class="media-body pl-2 ml-1 mt-n1">por<span class="font-weight-semibold ml-1">Empresa
                                        1</span></div>
                            </a>
                            <div class="mt-3 text-right text-nowrap">
                                <a class="meta-link font-size-xs" href="#">
                                    <i class="fe-calendar mr-1 mt-n1"></i>&nbsp;22 Ago
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-secondary" style="margin-top: -300px; padding-top: 300px;"></div>
    <!-- Statistics (Digits)-->
    <section class="container py-4 pt-md-6 pt-lg-7 pb-md-5">
        <div class="row pb-lg-4 pt-3">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">3</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">10</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">6+</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">8</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">5</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center mb-grid-gutter">
                <h3 class="display-2 font-weight-normal mb-0">900</h3>
                <p class="text-muted font-size-lg mb-0">Lorem ipsum</p>
            </div>
        </div>
    </section>
@endsection