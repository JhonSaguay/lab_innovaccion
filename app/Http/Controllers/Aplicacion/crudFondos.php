<?php

namespace App\Http\Controllers\Aplicacion;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Helpers
use App\Helpers\CustomUrl; // $string
use App\Helpers\Archivos; // $nombre, $archivo, $disk

// Modelos
use App\Models\Fondo;

// Reglas de validacion
use App\Http\Requests\Fondo\StorePost;
use App\Http\Requests\Fondo\UpdatePost;

class crudFondos extends Controller
{
    public function __construct(){
        $this->middleware('acceso-app:user,admin,superadmin')->except('destroy');
        $this->middleware('acceso-app:user,superadmin')->only('destroy');
    }

    /**
     * Almacena un fondo (componente E)
     * @param StorePost $request
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function store(StorePost $request){
        $validatedData = $request->validated();

        if($fondo = Fondo::create($validatedData)){

            if(isset($validatedData['imagen'])){
                // $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
                $name = $fondo->id;
                $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'fondos');
                $fondo->imagen = $imageName;
                $fondo->save();
            }

            return redirect()->route('app.escritorio.fondos')->with('status', 'Fondo creado con éxito');
        }
        return back()->with('error', 'Fondo no creado');
    }

    /**
     * Actualiza un fondo (componente E)
     * @param UpdatePost $request
     * @param Fondo $fondo
     * @return \Illuminate\Http\Response
     * App\Models\Fondo
     */
    public function update(UpdatePost $request, Fondo $fondo){
        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('admin') && !Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $validatedData = $request->validated();
        $fondo->update($request->validated());

        if(isset($validatedData['imagen'])){
            // $name = CustomUrl::urlTitle($validatedData['organizacion']).'_'.$fondo->id;
            $name = $fondo->id;
            $imageName = Archivos::storeImagen($name, $validatedData['imagen'], 'fondos');
            $fondo->imagen = $imageName;
            $fondo->save();
        }

        if ($action = Helper::returnAdmin()) {
            return redirect()
                ->route($action)
                ->with('status', 'Fondo modificado con éxito');
        }

        return redirect()->route('app.escritorio.fondos')->with('status', 'Fondo modificado con éxito');
    }

    /**
     * Elimina un fondo (componente E)
     * @param  \App\Models\Fondo $fondo->id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fondo $fondo) {
        if(Auth::id() != $fondo->user_id && (!Auth::user()->hasRole('superadmin'))){
            return back()->with('error', 'No ingresaste este fondo.');
        }

        $fondo->delete();
        return redirect()->route('app.escritorio.fondos')->with('status', 'Fondo eliminado con éxito');
    }
}
