<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Plantilla;
use App\Models\Provincia;
use App\Models\Cabreplanteo;
use Illuminate\Http\Request;
use App\Models\Emplazamiento;
use App\Models\CuatroplusTransmision;
use App\Models\Cuatroplus_transmision;


class PageController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $posts = [
            ['id' =>1, 'title' => 'PHP',     'slug' => 'php'],
            ['id' =>2, 'title' => 'Laravel', 'slug' => 'laravel']
        ];
        return view('blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        $post = $slug;
        return view('post',['post' => $post]);
    }
    public function obras(Request $request){
        if(isset($request->id)){
            dd($request->id);
            return Obra::find($request->id);
        }
        return Obra::get();
    }

    public function provincias(){
        return Provincia::get();
    }

    public function emplazamientos(){
        return Emplazamiento::get();
    }

    public function cabreplanteos(){
        return Cabreplanteo::get();
    }
    public function plantillas(){
        return Plantilla::get();
    }

    public function cuatroplusTransmisiones() {
        return CuatroplusTransmision::get();
    }
}
