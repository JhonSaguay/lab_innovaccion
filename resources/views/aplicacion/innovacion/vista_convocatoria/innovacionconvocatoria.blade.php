@extends('layouts.aplicacion.app')
@section('content')
    <section class="container my-lg-2 pt-5 pb-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-lg-0 mt-lg-5">
                <h1 class="mt-5 text-primary uppercase">Gestión de la Innovación</h1>
                <div class="py-3">
                    <p class="cs-callout">
                        En esta sección promovemos la gestión de la innovación sobre la base de la participación ciudadana y la creación colectiva de soluciones a partir de la identificación y planteamiento de problemas. <br>
                        Impulsamos la innovación abierta, la innovación social y la innovación pública, mediante un esquema de interacción virtual que inicia con la visibilización y registro de problemas, para que estos puedan recibir propuestas de soluciones que cumplan con características innovadoras. <br>
                        Se realizarán convocatorias a distintos sectores para que registre problemas que hayan detectado en su gestión, y a partir de esa información iniciará el intercambio de conocimiento para proponer soluciones sobre el pilar de la innovación. <br>
                        Toda la información se irá cargando en esta sección, y de forma georeferenciada en el mapa de la plataforma.
                    </p>
                </div>
                
            </div>
            <div class="col py-3 py-lg-0 mt-lg-5"><img src="{{ asset('img/layout/home/laboratorio-side-bkg.png') }}" alt="Side banner"></div>
        </div>
    </section>
    <section id="funciones">
        <div class="container-fluid pl-lg-8 pr-lg-8 mt-5 mb-5">
            <h4 class="text-center pt-3 pt-md-2 mb-5 uppercase text-mora">Convocatorias</h4>
            <div class="row justify-content-center">
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/innovacion_abierta.png') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-naranja text-center">sector productivo</h3>
                        <p class="font-size-sm mb-0 text-justify">En esta sección buscamos levantar información referente a problemas existentes en los distintos sectores productivos del Ecuador, para promover la cooperación con otros actores del Sistema Nacional de Innovación en busca de articulación de ideas, proyectos y conocimientos externos con el interno de cada organización/empresa, para proponer soluciones basadas en la innovación.</p>
                    </div>
                </div>
                <div class="itemhome col-md-5  col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/innovacion_publica.png') }}"
                            alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-tomate text-center">gestión pública </h3>
                        <p class="font-size-sm mb-0 text-justify">En esta sección buscamos levantar información acerca de problemas y soluciones en los espacios ciudadanos de participación, colaboración y co-creación, para aportar a la gestión pública a impulsar la innovación a partir de los requerimientos ciudadanos, promoviendo la participación ciudadana, la apertura de información, el uso de tecnologías de la comunicación y de la información en la generación de espacios alternativos de interacción enfocados a mejorar el servicio público, crear soluciones innovadoras a situaciones sociales, modernizar la relación entre actores gubernamentales y no gubernamentales, e innovar en el ámbito de las políticas públicas.</p>
                    </div>
                </div>
                <div class="itemhome col-md-5 col-lg-3 my-3" >
                    <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center h-100">
                        <img class="d-inline-block mb-4 mt-2" width="80" src="{{ asset('img/innovacion_social.png') }}"
                        alt="Icon" />
                        <h3 class="fs-14 mb-2 uppercase text-mora text-center">Ciudadanía</h3>
                        <p class="font-size-sm mb-0 text-justify">En esta sección buscamos levantar información acerca de problemas y soluciones en productos, servicios, procesos, organizaciones, comunicación, que solucionen cuestiones en el ámbito social o de forma más eficaz y eficiente en comparación con alternativas actuales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="searchbar-container" style="background: #f2f2f2">
    <form class="container" action="{{route('convocatorias.search')}}" method="POST">
            @csrf
            @method("POST")

            <div class="d-sm-flex align-items-center px-4 pt-4 pb-3">
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="tipoconvocatoria" style="color: #a13d8f">Tipo de convocatoria</label>
                    <select class="form-control custom-select select2" id="tipoconvocatoria" name="tipoconvocatoria" data-clean>
                        <option value="" selected hidden>Todos</option>
                        <option value="1">Sector Productivo</option>
                        <option value="2">Ciudadanía</option>
                        <option value="3">Gestión Pública</option>
                    </select>

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label class="form-label font-weight-bold" for="estadoconvocatoria" style="color: #a13d8f">Estado de la convocatoria</label>
                    <select class="form-control custom-select select2" id="estadoconvocatoria" name="estadoconvocatoria" data-clean>
                        <option value="" selected disabled hidden>Seleccione un estado</option>
                        <option value="1">Ambos</option>
                        <option value="2">Vigente</option>
                        <option value="3">Pasado</option>
                    </select>

                </div>
               
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_sector_productivo" class="control-label font-weight-bold" style="color: #a13d8f">Sector productivo</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_sector_productivo" name="sector_productivo[]"
                            class="form-control custom-select select2"
                           
                            data-placeholder="Seleccione uno o varios sectores"
                            data-close-on-select="false"
                            multiple>
                      
                        </select>

                    </div>
                    

                </div>
                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_subsector_productivo" class="control-label font-weight-bold" style="color: #a13d8f">Subsector productivo</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_subsector_productivo" name="subsector_productivo[]"
                            class="form-control custom-select select2"
                            data-placeholder="Seleccione uno o varios subsectores"
                            data-close-on-select="false"
                            multiple>

                        </select>

                    </div>

                </div>

                <div class="form-group w-100 mb-sm-4 mr-sm-3">
                    <label for="innovacion_abierta_ods" class="control-label  font-weight-bold" style="color: #a13d8f">ODS</label>
                    <div class= "m-0 p-0 w-100 form-group">
                                                                            
                        <select style="width:100%;" id="innovacion_abierta_ods" name="ods[]"
                            class="form-control custom-select select2"
                            data-ajax--url="{{route('api.ods-categoria.select2')}}"
                            data-ajax--data-type="json"
                            data-placeholder="Seleccione uno o varios ODS"
                            data-ajax--cache="true"
                            data-close-on-select="false"
                            multiple>
                        </select>
                    </div>
        
                </div>
                {{-- <div class="d-sm-flex align-items-center">
                    
                    
                </div> --}}
               <div class="text-center text-sm-left mt-2 mt-sm-4 mb-4">
                        <button class="btn " style="background: #ff7f00; color:#fafafc;" type="submit">Filtrar</button>
                </div>

            </div>


         
        </form>
    </section>

    <div class="position-relative" style=" height: 420px; background:linear-gradient(0deg, rgba(180,6,94,1) 0%, rgba(239,147,0,1) 100%);">
        <div class="cs-shape cs-shape-bottom cs-shape-curve bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
                </path>
            </svg>
        </div>
    </div>
    <section class="container bg-overlay-content pt-5 pt-md-6" style="margin-top: -420px;">
        <h2 class="text-light text-center pt-3 pt-md-2 uppercase">CONVOCATORIAS</h2>
        
        <div class="row mb-4">
        @foreach ($convocatorias as $convocatoria)
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    @if (($convocatoria->fecha_cierre) >= (date('Y-m-d')))
                        @if ($convocatoria->tipoconvocatoria_id == 1)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #ee8808;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 2)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #cc3e39;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        @elseif ($convocatoria->tipoconvocatoria_id == 3)
                            <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background: #b5095b;">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                        
                        @endif
                    @else
                        <span class="badge badge-lg badge-floating badge-floating-right text-white btn-primary">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @endif
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg m-0">INICIO</h1>
                                <h1 class="text-center m-0" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>    
                                <p class="text-center font-weight-bold font-size-lg m-0">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>

                                <div class="row justify-content-center mt-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route("innovaciongestion.ver",$convocatoria->id) }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ route("innovaciongestion.ver",$convocatoria->id) }}&text={{ $convocatoria->tipoconvocatoriaid->nombre }}" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></a>
                                    {{-- <a href="#" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon mt-2"><i class="fe-instagram"></i></a> --}}
                                    <a href="https://www.linkedin.com/shareArticle?url={{ route("innovaciongestion.ver",$convocatoria->id) }}&title={{ $convocatoria->tipoconvocatoriaid->nombre }}&source=LinkedIn" type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2 mt-2"><i class="fe-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @php
                                    $nombre=$convocatoria->nombre;
                                    $nombrelim=substr($nombre, 0, 70);
                                @endphp 
                                <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$nombrelim}}</a> </h3>
                                {{-- @if ($convocatoria->tipoconvocatoria_id == 2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif--}}
                                @php
                                    $descripcion=$convocatoria->descripcion;
                                    $descripcionlim=substr($descripcion, 0, 170);
                                @endphp 
                              
                                <p class="card-text font-size-sm" >{{$descripcionlim}}</p>
                            </div>
                        </div>
                        
                    </div>
                    <h2 class="text-right font-size-lg pr-4">FINALIZA <span style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_cierre))}}</span> {{date('M', strtotime( $convocatoria->fecha_cierre))}}</h2>
                    
                </article>
            </div>
        </div>
        @endforeach

    </div>
     
    <div class="col-12">{{ $convocatorias->links() }}</div>
    </section>
    
    {{-- <section class="container">
        <h2 class="text-primary text-center pt-3 pt-md-2 uppercase">CONVOCATORIAS pasadas</h2>
        
        <div class="row mb-4">
        @foreach ($convocatorias_antiguas as $convocatoria)
        <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="pb-2">
                <article class="card h-100 border-0 box-shadow pt-4 pb-5 mx-1">
                    @if (($convocatoria->fecha_cierre) >= (date('Y-m-d')))
                        <span class="badge badge-lg badge-floating badge-floating-right text-white" style="background:#ff7f00 ">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @else
                        <span class="badge badge-lg badge-floating badge-floating-right text-white btn-primary">{{$convocatoria->tipoconvocatoriaid->nombre}}</span>
                    @endif
                    <div class="row pt-3 no-gutters">
                        <div class="col-md-4 justify-content-md-center">
                            <div class="card-body text center">
                                <h1 class="text-center font-weight-bold font-size-lg m-0">INICIO</h1>
                                <h1 class="text-center m-0" style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_inicio))}}</h1>    
                                <p class="text-center font-weight-bold font-size-lg m-0">{{date('M', strtotime( $convocatoria->fecha_inicio))}}</p>

                                <div class="row justify-content-center mt-2">
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon"><i class="fe-facebook"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2"><i class="fe-twitter"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon mt-2"><i class="fe-instagram"></i></button>
                                    <button type="button" class="col-5 btn btn-outline-secondary btn-sm btn-icon ml-2 mt-2"><i class="fe-linkedin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                @if ($convocatoria->tipoconvocatoria_id == 2)
                                    @foreach ($convocatoria->conods as $objetivo)
                                        <h3 class="card-title" ><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$objetivo->objetivoid->nombre}}</a> </h3>
                                    @endforeach
                                @else
                                    @foreach ($convocatoria->consectores as $sector)
                                        <h3 class="card-title"><a style="color: #cc3e39" href="{{route("innovaciongestion.ver",$convocatoria->id)}}">{{$sector->sectorid->nombre}}</a> </h3>
                                    @endforeach
                                @endif
                                <p class="card-text font-size-sm">{{$convocatoria->descripcion}}</p>
                            </div>
                        </div>
                        
                    </div>
                    <h2 class="text-right font-size-lg pr-4">FINALIZA <span style="color:#cc3e39">{{date('d', strtotime( $convocatoria->fecha_cierre))}}</span> {{date('M', strtotime( $convocatoria->fecha_cierre))}}</h2>
                    
                </article>
            </div>
        </div>
        @endforeach

    </div>
     
    <div class="col-12">{{ $convocatorias->links() }}</div>
    </section> --}}
   
@endsection
@section('footer')
<script>
    $(document.body).on("change","#to-destination",function(){
        $("#from-destination").empty();
        if (this.value==1) {
            $("#from-destination").removeAttr('disabled');
        }
        else {
            $("#from-destination").attr('disabled','disabled');
        }
    });
</script>
<script>
    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#tipoconvocatoria').change(function(){
            if ($('#tipoconvocatoria').val()==2){
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
                $("#innovacion_abierta_subsector_productivo").attr('disabled','disabled');   
                $("#innovacion_abierta_sector_productivo").attr('disabled','disabled');  
            }
            else{
                $("#innovacion_abierta_subsector_productivo").removeAttr('disabled'); 
                $("#innovacion_abierta_sector_productivo").removeAttr('disabled');
                idsector='#innovacion_abierta_sector_productivo';
                value=$('#tipoconvocatoria').val()
                recargarlistasectores(idsector,value);
                idsubsector='#innovacion_abierta_subsector_productivo';
                listasectores=[]
                recargarlista(listasectores,idsubsector);
            }
            
        });
        function recargarlistasectores(idsector,value){
            // data-ajax--url="{{route('api.tipo-sector.select2',1)}}"
            // data-ajax--data-type="json"
            //                 data-ajax--data-cache="true"
            if (value==1){
                $.ajax({
                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',1)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });
                
            }
            else if (value==3){
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',3)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            else{
                $.ajax({

                    type:"POST",
                    url:"{{route('api.tipo-sector.select2',2)}}",
                    data: "json",

                    success:function(r){
                        $(idsector).find('option').remove();
                        $(r).each(function(i,v){
                        
                            $(idsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                            
                        });
                    },
                    error:function(){
                        alert('Ocurrio un error en el servidor ..');
                    }

                });

            }
            
        };
    });

</script>
<script type="text/javascript">
 
    $(document).ready(function(){
        var listasectores=[];
        var idsubsector;
        $('#innovacion_abierta_sector_productivo').change(function(){
            idsubsector='#innovacion_abierta_subsector_productivo';
            listasectores=$('#innovacion_abierta_sector_productivo').val();
        
            recargarlista(listasectores,idsubsector);
        });
    });
    
    function recargarlista(listasectores,idsubsector){
        
        if (listasectores.length!=0){
            var subsectorlist=$(idsubsector).val();
            $.ajax({

                type:"POST",
                url:"{{route('api.tipo-subsector.select2')}}",
                data: { listasectores1: JSON.stringify(listasectores)} ,
                
                success:function(r){
                    $(idsubsector).find('option').remove();
                    $(r).each(function(i,v){
                        if (subsectorlist.includes(v.id.toString())){
                            $(idsubsector).append('<option selected value="'+ v.id+'">'+v.text+'</option>');
                        }
                        else{
                            $(idsubsector).append('<option value="'+ v.id+'">'+v.text+'</option>');
                        }
                        
                    });
                },
                error:function(){
                    alert('Ocurrio un error en el servidor ..');
                }

            });
        }
        else{
            $(idsubsector).find('option').remove();
        }     
    };
</script>
    
@endsection