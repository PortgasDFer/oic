<?php

namespace LaGranLinea\Http\Controllers;

use LaGranLinea\Publicacion;
use Illuminate\Http\Request;
use LaGranLinea\Subcategoria;
use LaGranLinea\Categoria;
use LaGranLinea\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str as Str;
use Carbon\Carbon;
use Alert;
use Image;
use Redirect,Response;
use DataTables;
use Cache;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function datatable()
    {
        $posts=Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->select(array('publicaciones.titulo', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug','publicaciones.id','publicaciones.visitas','publicaciones.baja'));
                        return Datatables::of($posts)
                         ->editColumn('fecha', function ($post) {
                            return $post->fecha ? with(new Carbon($post->fecha))->format('d/m/Y') : '';
                        })
                        ->filterColumn('fecha', function ($query, $keyword) {
                            $query->whereRaw("DATE_FORMAT(fecha,'%d/%m/%Y') like ?", ["%$keyword%"]);
                        })
                        ->addColumn('edit','posts.botones.edit')
                        ->addColumn('delete','posts.botones.delete')
                        ->addColumn('preview','posts.botones.preview')
                        ->rawColumns(['edit','delete','preview'])
                        ->toJson(); 
    }

    public function myPostsDatatable($id)
    {
        $posts=Publicacion::join('users','publicaciones.id_user','=','users.id')
                    ->select(array('publicaciones.titulo', 'publicaciones.fecha', 'users.name', 'users.apellido','users.id','publicaciones.slug','publicaciones.id','publicaciones.visitas','publicaciones.baja'))
                    ->where('users.id','=',$id);
                    return Datatables::of($posts)
                     ->editColumn('fecha', function ($post) {
                        return $post->fecha ? with(new Carbon($post->fecha))->format('d/m/Y') : '';
                    })
                    ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(fecha,'%d/%m/%Y') like ?", ["%$keyword%"]);
                    })
                    ->addColumn('edit','posts.botones.edit')
                    ->addColumn('delete','posts.botones.delete')
                    ->addColumn('preview','posts.botones.preview')
                    ->rawColumns(['edit','delete','preview'])
                    ->toJson(); 
    }

    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Categoria::all();
        return view('posts.redactar',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags= explode(',', $request->tags);

        $post= new Publicacion();
        $post->titulo=$request->input('titulo');
        $post->slug=Str::slug($post->titulo);
        if($request->hasFile('cabecera')){
            $file = $request->file('cabecera');
            //$foto = time().$file->getClientOriginalName();
            $foto = $post->slug.$file->getClientOriginalExtension();
            $image = Image::make($file)->encode('webp', 90)->save(public_path('/headers/'  .  $foto . '.webp'));
            $post->cabecera=$foto.'.webp';
        }
        $post->subtitulo=$request->input('subtitulo');
        $post->fecha=$request->input('fecha');
        $post->contenido=$request->input('contenido');
        $post->id_user=$request->input('id_user');
        $post->baja=0;
        $post->visitas=0;
        $post->id_categoria=$request->input('id_categoria');
        $post->save();

        $post->tag($tags);

        alert()->success('Organización Internacional De Coaching', 'Publicación realizada correctamente');
        return Redirect::to('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \LaGranLinea\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Publicacion::where('slug','=',$slug)->firstOrFail();
        if(Cache::has($slug)==false){
            Cache::add($slug,'contador',0.30);
            $num=$post->visitas;
            $num++;
            $post->visitas=$num;
            $post->save();
        }
        return $post;
    }

    public function myPosts($id)
    {
        $user=User::find($id);
        $posts=Publicacion::where('id_user','=',$user->id)->get();
        return view('usuarios.postsbyuser',compact('user','posts'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \LaGranLinea\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Publicacion::where('slug','=',$slug)->firstOrFail();
        $cat=Categoria::all();
        alert()->message('Organización Internacional De Coaching', 'Editar publicacion');
        return view('posts.editar',compact('post','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \LaGranLinea\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post=Publicacion::where('slug','=',$slug)->firstOrFail();
        $post->titulo=$request->input('titulo');
        $post->slug=Str::slug($post->titulo);
        if($request->hasFile('cabecera')){
            $file_path = public_path() . "/headers/$post->cabecera";
            \File::delete($file_path);
            $file = $request->file('cabecera');
            //$foto = time().$file->getClientOriginalName();
            $foto = $post->slug.$file->getClientOriginalExtension();
            $image = Image::make($file)->encode('webp', 90)->save(public_path('/headers/'  .  $foto . '.webp'));
            $post->cabecera=$foto.'.webp';
        }
        $post->subtitulo=$request->input('subtitulo');
        $post->fecha=$request->input('fecha');
        $post->contenido=$request->input('contenido');
        $post->id_user=$request->input('id_user');
        $post->baja=0;
        $post->save();
        alert()->success('Organización Internacional De Coaching', 'Publicación editada correctamente');
        return Redirect::to('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \LaGranLinea\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Publicacion::find($id);
        $file_path = public_path() . "/headers/$post->cabecera";
            \File::delete($file_path);
        $post->delete();
        alert()->success('Organización Internacional De Coaching', 'Publicación eliminada correctamente');
        return Redirect::to('/posts');
    }
}
