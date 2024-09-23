<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Font;
use App\Models\Resurs;
use App\Models\VideoTutorijal;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function pretraga(Request $request)
    {
        $upit = $request->input('pretraga');
        $isLatinica = $this->isLatinica($upit);

        $pretraga_blogovi = Blog::where(function ($query) use ($upit) {
            $query->where('naslov', 'LIKE', "%$upit%")->orWhere('sadrzaj', 'LIKE', "%$upit%");
        })->where('objavljen', 1)->get();

        $pretraga_alati = Alat::where(function ($query) use ($upit) {
            $query->where('naziv', 'LIKE', "%$upit%")->orWhere('opis', 'LIKE', "%$upit%");
        })->where('objavljen', 1)->get();

        $pretraga_fontovi = Font::where(function ($query) use ($upit) {
            $query->where('naziv', 'LIKE', "%$upit%")->orWhere('opis', 'LIKE', "%$upit%");
        })->where('objavljen', 1)->get();

        $pretraga_video_tutorijali = VideoTutorijal::where(function ($query) use ($upit) {
            $query->where('naziv', 'LIKE', "%$upit%")->orWhere('opis', 'LIKE', "%$upit%");
        })->where('objavljen', 1)->get();

        $nemaRezultataPoruka = "";
        if ($pretraga_blogovi->isEmpty() && $pretraga_alati->isEmpty() && $pretraga_fontovi->isEmpty() && $pretraga_video_tutorijali->isEmpty()) {
            $nemaRezultataPoruka = "Нема резултата за претрагу";
            if ($isLatinica) {
                $nemaRezultataPoruka .= ", пробајте на ћирилици";
            }
        }

        return view('pretraga', [
            'title' => 'Претрага',
            'pretraga_blogovi' => $pretraga_blogovi,
            'pretraga_alati' => $pretraga_alati,
            'pretraga_fontovi' => $pretraga_fontovi,
            'pretraga_video_tutorijali' => $pretraga_video_tutorijali,
            'nemaRezultataPoruka' => $nemaRezultataPoruka
        ]);
    }

    private function isLatinica($text)
    {
        return preg_match('/[A-Za-z]/', $text);
    }
    public function pocetna(){
        if (!Auth::check()) {
            return view('temp_pocetna', [
                'title' => 'Почетна страница'
            ]);
        }
        $istaknuti_blogovi = BlogController::istaknuti();
        $broj_istaknutih = BlogController::broj_istaknutih();
        $parametri = Config::where('parametar_name', 'like', 'pocetna_%')->get();
        return view('pocetna', [
            'istaknuti_blogovi' => $istaknuti_blogovi,
            'title' => 'Почетна страница',
            'broj_istaknutih' => $broj_istaknutih,
            'parametri'=>$parametri
        ]);
    }
    public function nekategorisani_blogovi(){
        $nekategorisani_blogovi = BlogController::nekategorisani();
        $parametri = Config::where('parametar_name', 'like', 'blogovi_%')->get();

        return view('blog.blogovi', [
            'blogovi' => $nekategorisani_blogovi,
            'title' => 'Некатегорисани',
            'parametri'=>$parametri
        ]);
    }

    public function zanimljivosti_blogovi(){
        $zanimljivosti_blogovi = BlogController::zanimljivosti();
        $parametri = Config::where('parametar_name', 'like', 'blogovi_%')->get();

        return view('blog.blogovi', [
            'blogovi' => $zanimljivosti_blogovi,
            'title' => 'Занимљивости',
            'parametri'=>$parametri
        ]);
    }

    public function resurs_blogovi(){
        $resursi_blogovi = BlogController::resursi();
        $parametri = Config::where('parametar_name', 'like', 'blogovi_%')->get();

        return view('blog.blogovi', [
            'blogovi' => $resursi_blogovi,
            'title' => 'Ресурси',
            'parametri'=>$parametri
        ]);
    }
    public function blog_uputstva(){
        $uputstva_blogovi = BlogController::uputstva();
        $parametri = Config::where('parametar_name', 'like', 'uputstva_%')->get();

        return view('blog.blogovi', [
            'blogovi' => $uputstva_blogovi,
            'title' => 'Упутства',
            'parametri'=>$parametri
        ]);
    }
}
