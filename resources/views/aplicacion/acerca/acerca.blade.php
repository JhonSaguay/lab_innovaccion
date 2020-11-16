@extends('layouts.aplicacion.app')

@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-7">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5">¿Qué es Thinkia?</h1>
                <div class="py-4">
                    <p class="cs-callout">Thinkia es un espacio de innovación en donde actores de diversos sectores – público, privado, academia, y sociedad civil - se encuentran con el ánimo de trabajar de manera colaborativa compartiendo los retos que afrontan y buscando soluciones basadas en innovación abierta, pública y social. Este espacio creativo de co-creación permite forjar las bases del ecosistema de innovación poniendo en contacto a los agentes innovadores y compartiendo materiales y metodologías que forjen una cultura de innovación. </p>
                </div>
                <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3"
                    href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a><span class="font-size-sm text-muted">Ver
                    video</span>
            </div>
        </div>
    </section>
    <!--
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, commodi incidunt voluptate nisi
                        magnam accusantium possimus suscipit debitis. Consectetur culpa dolorem libero ratione reiciendis
                        similique voluptas saepe placeat eveniet esse. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Est aspernatur laboriosam, libero voluptate doloribus recusandae distinctio maxime, ex nemo
                        architecto magnam. Laboriosam quam beatae iste itaque? Non enim ipsum quasi?</p>
                </div>
            </div>
        </div>
    </section>
    --->
    <section class="container mb-5 pb-3 pb-lg-0 mb-lg-7 mt-lg-7">
        <h2 class="pb-4 mb-4 text-center">Quienes somos</h2>
        <div class="row mb-3 mt-4">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:sarah.cole@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Sarah Cole" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Sarah Cole</h3>
                        <p class="font-size-xs text-body mb-0">CEO, Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:charlie.welch@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Charlie Welch" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Charlie Welch</h3>
                        <p class="font-size-xs text-body mb-0">CTO, Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:emma.brown@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Emma Brown" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Emma Brown</h3>
                        <p class="font-size-xs text-body mb-0">Director of Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:rosalie.lyons@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Rosalie Lyons" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Rosalie Lyons</h3>
                        <p class="font-size-xs text-body mb-0">Financial Director</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:jane.tanaka@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Jane Tanaka" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Jane Tanaka</h3>
                        <p class="font-size-xs text-body mb-0">Lead PR Strategist</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:sanomi.smith@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Sanomi Smith" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Sanomi Smith</h3>
                        <p class="font-size-xs text-body mb-0">Director of Human Resources</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:olivia.jones@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Olivia Jones" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Olivia Jones</h3>
                        <p class="font-size-xs text-body mb-0">Content Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class="card card-curved-body card-hover border-0 box-shadow mx-auto" style="max-width: 21rem;"><a
                        class="card-floating-icon" href="mailto:richard.davis@example.com"><i class="fe-mail"></i></a>
                    <div class="card-img-top card-img-gradient"><img src="http://placehold.it/280x300/?text=Team"
                            alt="Richard Davis" />
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h6 card-title mb-2">Richard Davis</h3>
                        <p class="font-size-xs text-body mb-0">Lead Accountant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="http://placehold.it/800x600">
                </div>
                <div class="col-12 col-lg-6 d-flex align-content-center flex-column justify-content-center">
                    <h2>Misión</h2>
                    <p>Consolidar la relación entre agentes innovadores para generar un ecosistema de innovación articulado y promocionar dentro de cada sector - público, privado, academia y sociedad civil 
                    – que los retos internos pueden ser resueltos con procesos abiertos de participación pública que busquen soluciones efectivas y agiles que aporten al bienestar social. </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-6 d-flex align-content-center flex-column justify-content-center">
                    <h2>Visión</h2>
                    <p>Buscar que los procesos de innovación abiertos, públicos y sociales se vuelvan una herramienta clave para la resolución de problemas complejos de desarrollo a nivel nacional. </p>
                    <p>Se requiere involucrar a diversos actores conjugando su inteligencia colectiva para realizar acciones conjuntas que brinden soluciones sostenibles, creativas e inclusivas. </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="http://placehold.it/800x600">
                </div>
            </div>
            
        </div>
    </section>
    <section class="cs-footer jarallax bg-dark pt-5 pt-md-6 pt-lg-7">
        <div class="container pt-3 pt-md-0">
            <div class="row pb-2">
                <form class="col-xl-6 col-lg-7 col-md-7 needs-validation mb-5" action="" novalidate>
                    <h2 class="text-light pb-4">Contáctanos</h2>
                    <div class="input-group-overlay form-group">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                    class="fe-user"></i></span></div>
                        <input class="form-control prepended-form-control" type="text" placeholder="Nombre" required>
                    </div>
                    <div class="input-group-overlay form-group">
                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i
                                    class="fe-mail"></i></span></div>
                        <input class="form-control prepended-form-control" type="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="row pt-2">
                        <div class="col-lg-6 col-md-8">
                            <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="col-xl-3 col-lg-4 offset-xl-3 offset-lg-1 col-md-5 mb-5">
                    <h2 class="text-light pb-2">Contacto</h2>
                    <ul class="list-unstyled font-size-sm mb-4 pb-2">
                        <li><a class="nav-link-style nav-link-light"
                                href="mailto:info@laboratoriodeinnovacion.org">info@laboratoriodeinnovacion.org</a></li>
                        <li><a class="nav-link-style nav-link-light" href="tel:+5932345867">+593 234 5867</a></li>
                    </ul>
                    <h3 class="h6 pb-2 text-light">Síguenos en:</h3>
                    <a class="social-btn sb-facebook sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-facebook"></i></a>
                    <a class="social-btn sb-twitter sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-twitter"></i></a>
                    <a class="social-btn sb-instagram sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-instagram"></i></a>
                    <a class="social-btn sb-linkedin sb-light sb-lg mr-2 mb-2" href="#"><i class="fe-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
