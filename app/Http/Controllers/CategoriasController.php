<?php

namespace LaGranLinea\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use LaGranLinea\Categoria;
use Alert;
use Redirect,Response;
use DataTables;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=Categoria::all();
        return view('categorias.index',compact('cat'));        
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


    public function obtenerCat()
    {
        $categoria= new Categoria();
        return datatables()
        ->eloquent($categoria::query()
                        ->where('categorias.baja','<>',1)
                  )
        ->addColumn('edit','categorias.edit')
        ->addColumn('delete','categorias.delete')
        ->rawColumns(['edit','delete'])
        ->toJson();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $categoria= new Categoria();
       $categoria->nombre=$request->input('nombre');
       $categoria->descripcion=$request->input('desc');
       $categoria->baja=0;
       $categoria->slu=Str::slug($categoria->nombre);
       $categoria->save();
        alert()->success('Organización Internacional De Coaching', 'Categoría registrada correctamente');
        return Redirect::to('/categoria');
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
        $categoria=Categoria::find($id);
        $categoria->nombre=$request->input('nombre');
        $categoria->descripcion=$request->input('desc');
        $categoria->save();
        alert()->success('Organización Internacional De Coaching', 'Categoría actualizada correctamente');
        return Redirect::to('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        $categoria->baja=1;
        $categoria->save();
        alert()->warning('Organización Internacional De Coaching', 'Categoría eliminada correctamente');
        return Redirect::to('/categoria');
    }
}
