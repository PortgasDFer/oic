<?php

namespace LaGranLinea\Http\Controllers;

use Illuminate\Http\Request;

use LaGranLinea\Evento;

use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Str as Str;
use Carbon\Carbon;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use SEOMeta;
use OpenGraph;
use JsonLd;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventos.index');
    }

    public function detalle($slug)
   {
        $detalle=Evento::where('slug','=', $slug)->firstOrFail();

        SEOMeta::setTitle($detalle->titulo,'false');
        SEOMeta::setDescription('Evento: '.$detalle->titulo.' en la página web Organización Internacional De Coaching');
        OpenGraph::setDescription('Evento en la página de Organización Internacional De Coaching');
        OpenGraph::setTitle('Evento: '.$detalle->titulo.' en la página web Organización Internacional De Coaching');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle($detalle->titulo,'false');
        JsonLd::setDescription('Evento en la página de Organización Internacional De Coaching');

        return view('paginas.eventos',compact('detalle'));

   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento=Evento::all();
        return view('eventos.redactar');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = new Evento();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            //$foto = time().$file->getClientOriginalName();
            $foto = time().$file->getClientOriginalExtension();
            $image = Image::make($file)->encode('webp', 90)->save(public_path('/eventos/'  .  $foto . '.webp'));
            $evento->imagen=$foto.'.webp';
        }

        $evento->titulo=$request->input('titulo');
        $evento->slug=Str::slug($evento->titulo);
        $evento->fecha=$request->input('fecha');
        $evento->descripcion=$request->input('desc');
        $evento->baja=0;
        $evento->save();

        alert()->success('Organización Internacional De Coaching', 'Evento realizado correctamente');
        return Redirect::to('/evento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $evento = Evento::where('slug','=',$slug)->firstOrFail();
        return view('eventos.editar', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $evento = Evento::where('slug','=',$slug)->firstOrFail();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $foto = time().$file->getClientOriginalName();
            //$foto = $file->getClientOriginalExtension();
            $image = Image::make($file)->encode('webp', 90)->save(public_path('/eventos/'  .  $foto . '.webp'));
            $evento->imagen=$foto.'.webp';;
        }

        $evento->titulo=$request->input('titulo');
        $evento->slug=Str::slug($evento->titulo);
        $evento->fecha=$request->input('fecha');
        $evento->descripcion=$request->input('desc');
        $evento->baja=0;
        $evento->save();
        alert()->success('Organización Internacional De Coaching', 'Evento actualizado correctamente');
        return Redirect::to('/evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento=Evento::find($id);
        $evento->baja=1;
        $evento->save();
        alert()->success('Organización Internacional De Coaching', 'Evento eliminado correctamente');
        return Redirect::to('/evento');
    }

    public function datatable()
    {
        $evento = Evento::where('baja','    =',0)->get();                        
        return Datatables::of($evento)
                        ->addColumn('edit','eventos.botones.edit')
                        ->addColumn('delete','eventos.botones.delete')
                        ->rawColumns(['edit','delete'])
                        ->toJson();
    }
}
