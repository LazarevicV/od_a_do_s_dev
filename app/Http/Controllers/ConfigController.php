<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function footer_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'footer_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Футер садржај'
        ]);
    }
    public function izmeni($id){
        $parametar = Config::find($id);
        if (!$parametar) return abort(404);

        return view('config.izmeni',[
            'parametar'=>$parametar,
            'title'=>$parametar->parametar_name
        ]);
    }
    public function izmeniSubmit($id, Request $request)
    {
        $parametar = Config::find($id);
        if (!$parametar) return abort(404);
    
        // Obrada vrednosti na osnovu parametra
        if (str_contains($parametar->parametar_name, 'text')) {
            $parametar->parametar_value = $request->parametar_value;
        } else {
            $parametar->parametar_value = strip_tags($request->parametar_value);
        }
        $parametar->save();
    
        $routeMap = [
            'footer_' => 'config.footer_sadrzaj',
            'pocetna_' => 'config.pocetna_sadrzaj',
            'razvoj_' => 'config.razvoj_sadrzaj',
            'resursi_' => 'config.resurs_sadrzaj',
            'blogovi_' => 'config.blog_sadrzaj',
            'uputstva_' => 'config.uputstva_sadrzaj',
            'alati_' => 'config.alati_sadrzaj',
            'video_tutorijali_' => 'config.video_tutorijali_sadrzaj',
            'baza_fontova_' => 'config.baza_fontova_sadrzaj',
        ];
    
        foreach ($routeMap as $prefix => $route) {
            if (str_contains($parametar->parametar_name, $prefix)) {
                return redirect()->route($route)->with('info', 'Запис је измењен.');
            }
        }
    
        return redirect()->back()->with('error', 'Није могуће пронаћи одговарајућу руту.');
    }
    

    public function pocetna_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'pocetna_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Почетна садржај'
        ]);
    }

    public function razvoj_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'razvoj_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Развој садржај'
        ]);
    }

    public function resurs_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'resursi_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Ресурси садржај'
        ]);
    }

    public function blog_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'blogovi_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Блог садржај'
        ]);
    }

    public function uputstva_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'uputstva_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Упутства садржај'
        ]);
    }

    public function alati_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'alati_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Алати садржај'
        ]);
    }
    public function video_tutorijali_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'video_tutorijali_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'Видео туторијали садржај'
        ]);
    }
    public function baza_fontova_sadrzaj(){
        $parametri = Config::where('parametar_name', 'like', 'baza_fontova_%')->get();
        return view('config.list',[
            'parametri'=>$parametri,
            'title'=>'База фонтова садржај'
        ]);
    }
}
