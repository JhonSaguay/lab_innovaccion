<?php $routeName = Route::currentRouteName(); ?>
<form id="filter-iniciativas" class="container" action="{{route('web.iniciativas.index')}}" method="POST"
      data-action="{{route('web.iniciativas.index')}}">
    @method('POST')
    @csrf

    <div class=" align-items-center  h-100 bg-light rounded-lg box-shadow-lg pl-2 pr-5 py-4">
        <div class="w-100 center-block text-left pl-5 pt-1">
            <div class="">


                <div class="row align-items-center">

                    <div class="col py-2 px-1">
                        <a class="font-weight-bold btn btn-primary btn-block"
                           href="{{route('web.iniciativas.mapa')}}">MAPA</a>
                    </div>
                    @if($routeName !== 'web.iniciativas.index')
                        <div class="col py-2 pr-1">
                            <a href="{{route('web.iniciativas.index')}}"
                               {{--style="border-color:#8B8B8B;background:#8B8B8B"--}}
                               class="font-weight-bold btn btn-primary btn-block">ACTORES</a>
                        </div>
                    @endif
                    @if($routeName !== 'web.iniciativas.analiticas')
                        <div class="col py-2 pr-3">
                            <a href="{{route('web.iniciativas.analiticas')}}"
                               class="font-weight-bold btn btn-primary btn-block">
                                ANALÍTICA
                            </a>
                        </div>
                    @endif

                    <div class="font-weight-bold d-flex justify-content-end col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <button class="font-weight-bold btn btn btn-primary mr-3 dropdown-toggle"
                                data-toggle="dropdown">Descargar Datos
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a type="button" type="button" class="nav-link-style ml-3 export"
                                   data-action="{{route('web.iniciativas.exportar.csv')}}">
                                    <i class="fe-download"></i> .CSV
                                </a>
                            </li>

                            <li>
                                <a type="button" class="nav-link-style ml-3 export"
                                   data-action="{{route('web.iniciativas.exportar.json')}}">
                                    <i class="fe-download"></i> .JSON
                                </a>
                            </li>

                            <li>
                                <a type="button" class="nav-link-style ml-3 export"
                                   data-action="{{route('web.iniciativas.exportar.excel')}}">
                                    <i class="fe-download"></i> .XLSX
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <a href="/mapa"
                           class="btn btn-primary font-weight-bold btn btn-primary mr-3 btn-filter-submit"
                           style="border-color:#7A3240;background:#7A3240 "
                           data-action="">
                            <img src="{{ asset('images/Group 161.svg')}}"/>
                            Ver mapa completo
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-12 py-3">
                        <a href="{{route('app.iniciativas.create')}}"
                           class="font-weight-bold btn btn-primary float-right"
                           style="border-color:#fd972b;background: #fd972b;">Registra tu iniciativa
                        </a>
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <h2 style="color:#531c6a" class="float-left">Filtros</h2>
                    </div>
                </div>
                <div class="row  mr-2 align-items-center">

                    <div class="w-100 center-block text-left pl-xl-2 pl-lg-1 pl-md-0">
                        <div class="row  mr-md-2 align-items-center">


                            <div class="col-12 ">
                                <span class="ml-md-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "
                                >Tipo Instituci&oacute;n</span>
                                <select id="tipo_institucion"
                                        name="tipo_institucion[]"
                                        class="form-control custom-select select2"
                                        data-ajax--url="{{route('api.tipo-institucion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar tipo institución"
                                        style="width:100%;"
                                        multiple>
                                    @if(isset($tipoInstituciones))
                                        @foreach($tipoInstituciones as $tipoInstitucion)
                                            <option value="{{$tipoInstitucion->id}}"
                                                    selected="selected">{{$tipoInstitucion->descripcion}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-12 py-1">
                                <span class="ml-md-3 py-2 mt-1 mb-1  py-md-0 mt-sm-0 mb-sm-0 font-weight-bold  d-block"
                                      style="font-size: 15px;color:#531c6a ">ODS</span>
                                <select id="ods_categorias" class="form-control custom-select select2"
                                        name="ods_categorias[]"
                                        data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        style="width:100%;"
                                        data-placeholder="Seleccionar ODS"
                                        multiple>
                                    @if(isset($odsCategorias))
                                        @foreach($odsCategorias as $odsCategoria)
                                            <option value="{{$odsCategoria->id}}"
                                                    selected="selected">{{$odsCategoria->nombre}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-12 py-1">
                                <span class="ml-md-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a ">Población Objetivo</span>
                                <select style="width:100%;"
                                        id="tipo_poblacion"
                                        name="tipo_poblacion[]"
                                        class="form-control select2"
                                        data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                        data-ajax--data-type="json"
                                        data-ajax--cache="true"
                                        data-close-on-select="false"
                                        data-placeholder="Seleccionar población objetivo"
                                        multiple>
                                    @if(isset($tipoPoblaciones))
                                        @foreach($tipoPoblaciones as $tipoPoblacion)
                                            <option value="{{$tipoPoblacion->id}}"
                                                    selected="selected">{{$tipoPoblacion->descripcion}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            {{--<div class="col-12 py-1">--}}
                            {{--<span class=" ml-md-3 font-weight-bold  d-block" style="font-size: 15px;color:#531c6a "--}}
                            {{-->Ciudad</span>--}}
                            {{--<select id="canton_id"--}}
                            {{--name="canton_id[]"--}}
                            {{--class="form-control select2"--}}
                            {{--data-ajax--url="{{route('api.canton.select2')}}"--}}
                            {{--data-ajax--data-type="json"--}}
                            {{--data-ajax--cache="true"--}}
                            {{--data-close-on-select="false"--}}
                            {{--data-placeholder="Seleccionar cantón"--}}
                            {{--style="width:100%;"--}}
                            {{--multiple>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                        </div>
                        <p style="display: flex;" class="text-center  justify-content-center">
                        <div class="row justify-content-center">
                            <button type="button" class="font-weight-bold  btn btn-primary btn-filter-submit"
                                    style="border-color:#FF7F00;background: #FF7F00; width: 150px;"
                                    data-action="{{route('web.iniciativas.index')}}">
                                Aplicar
                            </button>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<style>
    .select2-selection.select2-selection--multiple {
        width: 100%;
    }

    .select2-container .select2-selection--multiple .select2-selection__rendered {

        white-space: unset !important;
    }

    .select2-selection__rendered {
        width: 100%;
        overflow-y: scroll !important;
        resize: none;

    }

    select2-search__field:placeholder-shown {
        width: auto !important;
    }

    .select2-selection__choice {

    }

    .select2-selection.select2-selection--single {

        border-radius: 10px;
    }

    .select2 {
        max-width: none !important;
    }

</style>
