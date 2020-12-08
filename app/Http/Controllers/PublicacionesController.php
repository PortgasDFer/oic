<?php

namespace LaGranLinea\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use LaGranLinea\Publicacion;
use LaGranLinea\Categoria;
use LaGranLinea\User;
use LaGranLinea\Tag;
use Artesaos\SEOTools\Facades\SEOTools;
use SEOMeta;
use OpenGraph;
use JsonLd;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tag::orderBy(DB::raw('RAND()'))
                        ->take(9)
                        ->get();
        $publicaciones= Publicacion::orderBy('fecha','DESC')->paginate(5);
        $categorias = Categoria::where('baja','=',0)->get();
        $recientes =Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->get()
                        ->take(3);
        SEOMeta::setTitle('Temas de interés','false');
        SEOMeta::setDescription('Temas que te pueden interesar');
        OpenGraph::setDescription('Temas que te pueden interesar');
        OpenGraph::setTitle('Temas de interés');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Temas de interés');
        JsonLd::setDescription('Temas que te pueden interesar');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.publicaciones',compact('publicaciones','tags','categorias','recientes'));
    }

   public function publicacion($slug)
   {
        $post=Publicacion::where('slug','=', $slug)->firstOrFail();
        $publicacion=Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','users.avatar','users.bio','publicaciones.slug','publicaciones.contenido','categorias.nombre','categorias.slu'))
                        ->where('publicaciones.slug','=',$slug)
                        ->firstOrFail();
        $tags=Tag::orderBy(DB::raw('RAND()'))
                        ->take(9)
                        ->get();
        $recientes =Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->get()
                        ->take(3);
        $categorias = Categoria::where('baja','=',0)->get();

        SEOMeta::setTitle($post->titulo,'false');
        SEOMeta::setDescription($post->subtitulo);
        OpenGraph::setDescription($post->subtitulo);
        OpenGraph::setTitle($post->titulo);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle($post->titulo);
        JsonLd::setDescription($post->subtitulo);
        JsonLd::addImage('/headers/'.$post->cabecera);

        return view('paginas.publicacion',compact('post','publicacion','tags','recientes','categorias'));


   }

   public function categoria($slu)
   {
        $publicaciones=Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug','categorias.slu'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->where('categorias.slu','=',$slu)
                        ->paginate(5);
        $categoria=Categoria::where('slu','=',$slu)->firstOrFail();
        $categorias = Categoria::where('baja','=',0)->get();
        $recientes =Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->get()
                        ->take(3);
         $tags=Tag::orderBy(DB::raw('RAND()'))
                        ->take(9)
                        ->get();

        SEOMeta::setTitle('Busqueda por categoria: '.$categoria->nombre,'false');
        SEOMeta::setDescription($categoria->descripcion);
        OpenGraph::setDescription($categoria->descripcion);
        OpenGraph::setTitle($categoria->nombre);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle($categoria->nombre);
        JsonLd::setDescription($categoria->descripcion);
        return view('paginas.categoria',compact('publicaciones','categorias','recientes','tags','post','categoria'));
   }

   public function tag($slug)
   {
        $publicaciones=Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug','categorias.slu'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->withAnyTag($slug)
                        ->paginate(5);
        $tag=Tag::where('slug','=',$slug)->firstOrFail();
        $categorias = Categoria::where('baja','=',0)->get();
        $recientes =Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->get()
                        ->take(4);
        $tags=Tag::orderBy(DB::raw('RAND()'))
                        ->take(9)
                        ->get();
        SEOMeta::setTitle('Busqueda por etiqueta: '.$tag->name,'false');
        SEOMeta::setDescription('Busqueda por etiquetas para la página web de Organización Internacional De Coaching');
        OpenGraph::setDescription('Busqueda por etiquetas para la página web de Organización Internacional De Coaching');
        OpenGraph::setTitle($tag->name);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle($tag->name);
        JsonLd::setDescription('Busqueda por etiquetas para la página web de Organización Internacional De Coaching');
        return view('paginas.etiqueta',compact('publicaciones','categorias','recientes','tags','post','tag'));
   }

   public function palabra(Request $request)
   {
        $palabra = $request->get('palabra');
        $publicaciones=Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug','categorias.slu'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->search($palabra)
                        ->paginate(5);
        $categorias = Categoria::where('baja','=',0)->get();
        $recientes =Publicacion::join('users','publicaciones.id_user','=','users.id')
                        ->join('categorias','publicaciones.id_categoria','=','categorias.id')
                        ->select(array('publicaciones.id','publicaciones.titulo','publicaciones.subtitulo','publicaciones.cabecera', 'publicaciones.fecha', 'users.name', 'users.apellido','publicaciones.slug'))
                        ->orderBy('publicaciones.fecha','desc')
                        ->get()
                        ->take(4);
         $tags=Tag::orderBy(DB::raw('RAND()'))
                        ->take(9)
                        ->get();
        //return $palabra;
        SEOMeta::setTitle('Busqueda por palabra: '.$palabra,'false');
        SEOMeta::setDescription('Busqueda por la palabra: '.$palabra.' en la página web Organización Internacional De Coaching');
        OpenGraph::setDescription('Busqueda por palabra en la página de Organización Internacional De Coaching');
        OpenGraph::setTitle('Busqueda por la palabra: '.$palabra.' en la página web Organización Internacional De Coaching');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('Busqueda por la palabra: '.$palabra.' en la página web Organización Internacional De Coaching');
        JsonLd::setDescription('Busqueda por palabra en la página de Organización Internacional De Coaching');
        return view('paginas.busqueda',compact('publicaciones','categorias','recientes','tags','palabra'));
   }
}
