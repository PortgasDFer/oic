<?php

namespace LaGranLinea\Http\Controllers;

use Illuminate\Http\Request;
use LaGranLinea\ForumCategoria;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Str as Str;
use Carbon\Carbon;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;

class ForumCategorias extends Controller
{
    

    public function datatable()
    {
        $categoria=new ForumCategoria;
        return datatables()
        ->eloquent($categoria::query())
        ->addColumn('edit','forum.categorias.botones.edit')
        ->addColumn('delete','forum.categorias.botones.delete')
        ->rawColumns(['edit','delete'])
        ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum.categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=new ForumCategoria();
        $categoria->name=$request->input('name');
        $categoria->color=$request->input('color');
        $categoria->order=5;
        $categoria->slug=Str::slug($categoria->name);
        $categoria->save();
          alert()->success('Organización Internacional De Coaching', 'Categoria registrada correctamente');
        return Redirect::to('/catforo');


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
        $categoria = ForumCategoria::find($id);
        return view('forum.categorias.edit',compact('categoria'));
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
        $categoria = ForumCategoria::find($id);
        $categoria->name=$request->input('name');
        $categoria->color=$request->input('color');
        $categoria->order=5;
        $categoria->slug=Str::slug($categoria->name);
        $categoria->save();
          alert()->success('Organización Internacional De Coaching', 'Categoria editada correctamente');
        return Redirect::to('/catforo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alert()->info('Organización Internacional De Coaching', 'Función deshabilitada');
        return Redirect::to('/catforo');
    }
}
