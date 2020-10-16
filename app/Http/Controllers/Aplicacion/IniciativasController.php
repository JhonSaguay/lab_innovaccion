<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Archivos;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Iniciativa\StorePost;

//use App\Http\Requests\Contacto\StorePost;
//use App\Models\Contacto;
use App\Models\EstadoRegistro;
use App\Models\IniciativaActor;
use App\Models\IniciativaContacto;
use App\Models\IniciativaInformacion;
use App\Models\IniciativaInstitucion;
use App\Models\IniciativaOds;
use App\Models\IniciativaOrigen;
use App\Models\IniciativaPoblacion;
use App\Models\Iniciativas;
use App\Models\IniciativaUbicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IniciativasController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        Iniciativas::$paginate = 2;
        $iniciativas = Iniciativas::obtenerIniciativasPaginate();
        return view('aplicacion.iniciativa.index', compact('iniciativas'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $model = new Iniciativas();
        IniciativaOrigen::$paginate = $request->mostrar;
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenPaginate();
        return view('aplicacion.iniciativa.create', compact('iniciativasOrigen','model'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(StorePost $request)
    {
        DB::beginTransaction();
        $requestData = $request->validated();
        $validator = Validator::make($requestData, StorePost::myRules());

        try {
            if ($validator->fails()) {
                return redirect('admin.material-docente.create')
                    ->withErrors($validator)
                    ->withInput();
            }


            if ($modelActor = IniciativaActor::create($requestData)) {
                if ($image = Archivos::storeImagen('iniciativas-' . date('his'), $request->logo, 'iniciativas')) {
                    $requestData['logo'] = $image;
                    if ($modelInformacion = IniciativaInformacion::create($requestData)) {
                        $estado = EstadoRegistro::obtenerEstadoRegistroRevision();
                        $modelIniciativa = new Iniciativas();
                        $modelIniciativa->estado_registro_id = $estado->id;
                        $modelIniciativa->iniciativa_origen_id = $request->iniciativa_propiedad;
                        $modelIniciativa->iniciativa_actor_id = $modelActor->id;
                        $modelIniciativa->iniciativa_informacion_id = $modelInformacion->id;

                        if ($modelIniciativa->save()) {
                            $statusInsert = true;
                            if ($dataInstitucion = self::dataTipoInstitucion($request, $modelIniciativa) ?? []) {
                                if (!(IniciativaInstitucion::insert($dataInstitucion))) {
                                    throw new Exception;
                                }
                            }

                            if ($dataUbicaciones = self::dataUbicaciones($request, $modelIniciativa) ?? []) {
                                if (!(IniciativaUbicacion::insert($dataUbicaciones))) {
                                    $statusInsert = false;
                                }
                            }

                            if ($dataTipoPoblacion = self::dataTipoPoblacion($request, $modelIniciativa) ?? []) {
                                if (!(IniciativaPoblacion::insert($dataTipoPoblacion))) {
                                    $statusInsert = false;
                                }
                            }

                            if ($dataOdsCategorias = self::dataOdsCategorias($request, $modelIniciativa) ?? []) {
                                if (!(IniciativaOds::insert($dataOdsCategorias))) {
                                    $statusInsert = false;
                                }
                            }

                            if ($dataIniciativaContacto = self::dataIniciativaContacto($request, $modelIniciativa) ?? []) {
                                if (!(IniciativaContacto::insert($dataIniciativaContacto))) {
                                    $statusInsert = false;
                                }
                            }


                            if ($statusInsert) {
                                DB::commit();
                                return redirect()
                                    ->route('app.iniciativas.index')
                                    ->with('status', 'Iniciativa cargada con éxito');
                            }
                        }
                    }
                }
            }

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Iniciativas $iniciativa)
    {
        $model = $iniciativa;
        $iniciativasOrigen = IniciativaOrigen::obtenerIniciativaOrigenPaginate();

        return view('aplicacion.iniciativa.edit', compact('model', 'iniciativasOrigen'));
    }

    public static function dataTipoInstitucion(Request $request, Iniciativas $iniciativa)
    {
        if ($request->has('tipo_institucion')) {
            foreach ($request->tipo_institucion as $key => $id) {
                $data[$key]['iniciativa_id'] = $iniciativa->id;
                $data[$key]['tipo_institucion_id'] = $id;
            }
            return $data;
        }

        return false;
    }

    public static function dataUbicaciones(Request $request, Iniciativas $iniciativa)
    {
        if ($request->has('ubicaciones')) {
            foreach ($request->ubicaciones as $key => $id) {
                $data[$key]['iniciativa_id'] = $iniciativa->id;
                $data[$key]['canton_id'] = $id;
            }
            return $data;
        }

        return false;
    }

    public static function dataTipoPoblacion(Request $request, Iniciativas $iniciativa)
    {
        if ($request->has('tipo_poblacion')) {
            foreach ($request->tipo_poblacion as $key => $id) {
                $data[$key]['iniciativa_id'] = $iniciativa->id;
                $data[$key]['tipo_poblacion_id'] = $id;
            }
            return $data;
        }

        return false;
    }

    public static function dataOdsCategorias(Request $request, Iniciativas $iniciativa)
    {
        if ($request->has('ods_categorias')) {
            foreach ($request->ods_categorias as $key => $id) {
                $data[$key]['iniciativa_id'] = $iniciativa->id;
                $data[$key]['ods_categoria_id'] = $id;
            }

            return $data;
        }

        return false;
    }

    public static function dataIniciativaContacto(Request $request, Iniciativas $iniciativa)
    {
        if ($request->has('iniciativa_contacto') && is_array($request->iniciativa_contacto)) {
            foreach ($request->iniciativa_contacto as $key => $contacto) {
                $contacto['iniciativa_id'] = $iniciativa->id;
                $data[$key] = $contacto;
            }

            return $data;
        }

        return false;
    }
}
