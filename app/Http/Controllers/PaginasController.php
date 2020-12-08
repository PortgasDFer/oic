<?php

namespace LaGranLinea\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use SEOMeta;
use OpenGraph;
use JsonLd;
use LaGranLinea\Evento;

class PaginasController extends Controller
{
    /**
     * Index de la página.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eve=Evento::first()
            ->take(3)
            ->get();
        SEOMeta::setTitle('Organización Internacional De Coaching','false');
        SEOMeta::setDescription('Servicio de coach de vida personalizado para potenciar tu vida, disponible en México y el mundo');
        OpenGraph::setDescription('Servicio de coach de vida personalizado para potenciar tu vida, disponible en México y el mundo');
        OpenGraph::setTitle('Organización Internacional De Coaching');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Organización Internacional De Coaching');
        JsonLd::setDescription('Servicio de coach de vida personalizado para potenciar tu vida, disponible en México y el mundo');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('inicio',compact('eve'));
    }

    /**
     * Página nosotros
     * 
     */
    public function nosotros()
    {
        SEOMeta::setTitle('Acerca de nosotros','false');
        SEOMeta::setDescription('Visión, misión y valores que conforman la Organización Internacional De Coaching');
        OpenGraph::setDescription('Visión, misión y valores que conforman la Organización Internacional De Coaching');
        OpenGraph::setTitle('Acerca de nosotros - Organización Internacional De Coaching');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Acerca de nosotros - Organización Internacional De Coaching');
        JsonLd::setDescription('Visión, misión y valores que conforman la Organización Internacional De Coaching');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.nosotros');
    }

    /**
     * Página cursos
     * 
     */
    public function curso()
    {
        SEOMeta::setTitle('Curso gratis - Coaching Energy Center','false');
        SEOMeta::setDescription('Coaching gratis! Aprenderás a manejar los 3 aspectos importantes (Lenguaje, Cuerpo y Emoción)');
        OpenGraph::setDescription('Coaching gratis! Aprenderás a manejar los 3 aspectos importantes (Lenguaje, Cuerpo y Emoción)');
        OpenGraph::setTitle('Curso gratis - Coaching Energy Center');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Curso gratis - Coaching Energy Center');
        JsonLd::setDescription('Coaching gratis! Aprenderás a manejar los 3 aspectos importantes (Lenguaje, Cuerpo y Emoción)');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.curso');
    }

    /**
     * Páginas servicios
     * 
     */
    public function servicios()
    {
        SEOMeta::setTitle('Nuestros servicios','false');
        SEOMeta::setDescription('Servicios de coaching personal para todo el México y el mundo');
        OpenGraph::setDescription('Servicios de coaching personal para todo el México y el mundo');
        OpenGraph::setTitle('Nuestros servicios');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Nuestros servicios');
        JsonLd::setDescription('Servicios de coaching personal para todo el México y el mundo');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.servicios');
    }

    /**
     * Página temas de interes
     * 
     */
    public function temas()
    {
        SEOMeta::setTitle('Temas de interés','false');
        SEOMeta::setDescription('¿Por qué necesito un coach?, Dudas acerca del coaching personal, ¿qué es el "YO SOY"?');
        OpenGraph::setDescription('¿Por qué necesito un coach?, Dudas acerca del coaching personal, ¿qué es el "YO SOY"?');
        OpenGraph::setTitle('Temas de interés');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Temas de interés');
        JsonLd::setDescription('¿Por qué necesito un coach?, Dudas acerca del coaching personal, ¿qué es el "YO SOY"?');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.temas');
    }

    /**
     * Página foro
     * 
     */
    public function foro()
    {
        SEOMeta::setTitle('Foro','false');
        SEOMeta::setDescription('Coaching, foro para ser escuchado en los problemas que aquejan tu vida, es tu espacio para ser escuchado.');
        OpenGraph::setDescription('Coaching, foro para ser escuchado en los problemas que aquejan tu vida, es tu espacio para ser escuchado.');
        OpenGraph::setTitle('Foro');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Foro');
        JsonLd::setDescription('Coaching, foro para ser escuchado en los problemas que aquejan tu vida, es tu espacio para ser escuchado.');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('paginas.foro');
    }

    /**
     * Página mi historia
     * 
     */
    public function historia()
    {
        SEOMeta::setTitle('Mi historia','false');
        SEOMeta::setDescription('¡Hola!, mi nombre es Jorge Hernandez Paez y esta es mi historia');
        OpenGraph::setDescription('¡Hola!, mi nombre es Jorge Hernandez Paez y esta es mi historia');
        OpenGraph::setTitle('Mi historia');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'website');
        JsonLd::setTitle('Mi historia');
        JsonLd::setDescription('¡Hola!, mi nombre es Jorge Hernandez Paez y esta es mi historia');
        return view('paginas.historia');
    }

    /**
     * Página pregunta-uno
     * 
     */
    public function preguntauno()
    {
        SEOMeta::setTitle('¿Has sentido que tu vida es un túnel sin salida?','false');
        SEOMeta::setDescription('Cuando sentimos que la vida nos mantiene ajenos a nuestras metas y objetivos; que por más que nos preparemos, busquemos nuevos trabajos o imploremos por nuevas oportunidades, sencillamente no lo conseguimos');
        SEOMeta::addKeyword(['Organización Internacional de Coaching','OIC','Ayuda','¿Que hago con mi vida?','¿Como lograr mis objetivos?']);
        OpenGraph::setDescription('Cuando sentimos que la vida nos mantiene ajenos a nuestras metas y objetivos; que por más que nos preparemos, busquemos nuevos trabajos o imploremos por nuevas oportunidades, sencillamente no lo conseguimos');
        OpenGraph::setTitle('¿Has sentido que tu vida es un túnel sin salida?');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('¿Has sentido que tu vida es un túnel sin salida?');
        JsonLd::setDescription('Cuando sentimos que la vida nos mantiene ajenos a nuestras metas y objetivos; que por más que nos preparemos, busquemos nuevos trabajos o imploremos por nuevas oportunidades, sencillamente no lo conseguimos');
        JsonLd::addImage('site/images/p1.jpg');
        return view('paginas.preguntauno');
    }

    /**
     * Página pregunta-dos
     * 
     */
    public function preguntados()
    {
        SEOMeta::setTitle('¿Te has limitado en practicar alguna actividad porque crees que no serías el mejor o no tienes futuro en ello?','false');
        SEOMeta::setDescription('No te conformes con soñar que realizas aquella actividad que has abandonado por miedo a fracasar, no permitas que otras personas dirijan tu vida diciéndote “no vas a poder”');
        SEOMeta::addKeyword(['Organización Internacional de Coaching','OIC','Ayuda','¿Cómo puedes pulir a tu talento y/o actividad?','¿Cuántas veces has dejado de hacer una actividad recreativa, académica o laboral porque crees que no eres lo suficientemente buen@ en ello?']);
        OpenGraph::setDescription('No te conformes con soñar que realizas aquella actividad que has abandonado por miedo a fracasar, no permitas que otras personas dirijan tu vida diciéndote “no vas a poder”');
        OpenGraph::setTitle('¿Te has limitado en practicar alguna actividad porque crees que no serías el mejor o no tienes futuro en ello?');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('¿Te has limitado en practicar alguna actividad porque crees que no serías el mejor o no tienes futuro en ello?');
        JsonLd::setDescription('No te conformes con soñar que realizas aquella actividad que has abandonado por miedo a fracasar, no permitas que otras personas dirijan tu vida diciéndote “no vas a poder”');
        JsonLd::addImage('site/images/p2.jpg');
        return view('paginas.preguntados');
    }

     /**
     * Página pregunta-tres
     * 
     */
    public function preguntatres()
    {
        SEOMeta::setTitle('¿Cuántas veces has evadido de responder aquello que te gusta o disgusta porque sientes que no te conoces?','false');
        SEOMeta::setDescription('El autoconocimiento es un proceso que necesita ayuda de un profesional que te guíe y brinde herramientas para poder lograrlo, por supuesto, tu tendrás el papel estelar. Este proceso de conocimiento propio es importante en tu vida');
        SEOMeta::addKeyword(['Organización Internacional de Coaching','OIC','Ayuda','¿Te ha ocurrido que en ciclos de presentación te preguntan tu película favorita, tu música predilecta y no sabes que responder?']);
        OpenGraph::setDescription('El autoconocimiento es un proceso que necesita ayuda de un profesional que te guíe y brinde herramientas para poder lograrlo, por supuesto, tu tendrás el papel estelar. Este proceso de conocimiento propio es importante en tu vida');
        OpenGraph::setTitle('¿Cuántas veces has evadido de responder aquello que te gusta o disgusta porque sientes que no te conoces?');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('¿Cuántas veces has evadido de responder aquello que te gusta o disgusta porque sientes que no te conoces?');
        JsonLd::setDescription('El autoconocimiento es un proceso que necesita ayuda de un profesional que te guíe y brinde herramientas para poder lograrlo, por supuesto, tu tendrás el papel estelar. Este proceso de conocimiento propio es importante en tu vida');
        JsonLd::addImage('site/images/p3.jpg');
        return view('paginas.preguntatres');
    }
    /**
     * Página pregunta-cuatro
     * 
     */
    public function preguntacuatro()
    {
        SEOMeta::setTitle('¿Has llegado a pensar qué dirección debes darle a tu vida?','false');
        SEOMeta::setDescription('La desconfianza es falta de credibilidad en ti mismo, en alguien o en algo, sabias que es una emoción negativa que implica falta de seguridad sobre las acciones y actitudes que una persona puede tener hacia otra');
        SEOMeta::addKeyword(['Organización Internacional de Coaching','OIC','Ayuda','Desconfianza','No importa cómo vayas de lento, siempre y cuando no te detengas']);
        OpenGraph::setDescription('La desconfianza es falta de credibilidad en ti mismo, en alguien o en algo, sabias que es una emoción negativa que implica falta de seguridad sobre las acciones y actitudes que una persona puede tener hacia otra');
        OpenGraph::setTitle('¿Has llegado a pensar qué dirección debes darle a tu vida?');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('¿Has llegado a pensar qué dirección debes darle a tu vida?');
        JsonLd::setDescription('La desconfianza es falta de credibilidad en ti mismo, en alguien o en algo, sabias que es una emoción negativa que implica falta de seguridad sobre las acciones y actitudes que una persona puede tener hacia otra');
        JsonLd::addImage('site/images/p4.jpg');
        return view('paginas.preguntacuatro');
    }
    /**
     * Página pregunta-cuatro
     * 
     */
    public function preguntacinco()
    {
        SEOMeta::setTitle('¿Has sentido miedo a que tu vida cambie después de la contingencia sanitaria?','false');
        SEOMeta::setDescription('Si te sientes acorralado es importante que comprendas lo que te impide seguir hacia adelante. Esto puede sonarte cotidiano en teoría pero cuando quieres ser diferente puede convertirse en una gran lucha en tu vida cotidiana.');
        SEOMeta::addKeyword(['Organización Internacional de Coaching','OIC','Contingencia','Cambio de Vida','Miedo']);
        OpenGraph::setDescription('Si te sientes acorralado es importante que comprendas lo que te impide seguir hacia adelante. Esto puede sonarte cotidiano en teoría pero cuando quieres ser diferente puede convertirse en una gran lucha en tu vida cotidiana.');
        OpenGraph::setTitle('¿Has sentido miedo a que tu vida cambie después de la contingencia sanitaria?');
        OpenGraph::setUrl('https://organizacioninternacionaldecoaching.com.mx/');
        OpenGraph::addProperty('type', 'article');
        JsonLd::setTitle('¿Has sentido miedo a que tu vida cambie después de la contingencia sanitaria?');
        JsonLd::setDescription('Si te sientes acorralado es importante que comprendas lo que te impide seguir hacia adelante. Esto puede sonarte cotidiano en teoría pero cuando quieres ser diferente puede convertirse en una gran lucha en tu vida cotidiana.');
        JsonLd::addImage('site/images/p5.jpg');
        return view('paginas.preguntacinco');
    }
}
