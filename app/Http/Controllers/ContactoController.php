<?php

namespace LaGranLinea\Http\Controllers;

use Illuminate\Http\Request;
use LaGranLinea\Contacto;

use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Str as Str;
use Carbon\Carbon;
use Alert;
use Redirect,Response;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $con=Contacto::all();
        return view('paginas.contactos',compact('con'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contacto();
        $contacto->nombre=$request->input('nombre');
        $contacto->email=$request->input('correo');
        $contacto->curso=$request->input('curso');
        $contacto->dudas=$request->input('dudas');
        $contacto->save();

        alert()->success('Organización Internacional De Coaching', 'Tu comentario se envío exitosamente');
        return Redirect::to('/temas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
