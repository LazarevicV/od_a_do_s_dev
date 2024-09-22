<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Resurs;
use Illuminate\Http\Request;

class ResursController extends Controller
{
    public function resursi()
    {
        $resursi = Resurs::where('objavljen', 1)->get();
        $parametar = Config::where('parametar_name', '=', 'resursi_title')->get();

        return view('resurs.resursi', [
            'resursi' => $resursi,
            'title' => 'Ресурси',
        ]);
    }

    public function razvoj()
    {
        $parametri = Config::where('parametar_name', 'like', 'razvoj_%')->get();
        return view('razvoj', [
            'parametri' => $parametri,
            'title' => 'Развој'
        ]);
    }

    public function baza_fontova()
    {
        $resurs = Resurs::find(1);
        $parametri = Config::where('parametar_name', 'like', 'baza_fontova_%')->get();

    
        return view('resurs.resurs', [
            'resurs' => $resurs,
            'title' => 'База фонтова',
            'parametri'=> $parametri
        ]);
    }
    
    public function video_tutorijali()
    {
        $resurs = Resurs::find(2);
        $parametri = Config::where('parametar_name', 'like', 'video_tutorijali_%')->get();

        return view('resurs.resurs', [
            'resurs' => $resurs,
            'title' => 'Видео туторијали',
            'parametri'=> $parametri
        ]);
    }
    
    //crud metode
    public function list()
    {
        $resursi = Resurs::all();

        return view('resurs.list', [
            'resursi' => $resursi,
            'title' => 'Листа ресурса',
        ]);
    }

    public function unesi()
    {
        return view('resurs.unesi', [
            'title' => 'Унеси ресурс',
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $resurs = new Resurs();
        $resurs->naziv = $request->input('naziv');
        $resurs->opis = $request->input('opis');
        $resurs->objavljen = $request->input('objavljen');
        $resurs->save();

        return redirect(route('resurs.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $resurs = Resurs::find($id);
        if (!$resurs) {
            return abort(404);
        }

        return view('resurs.izmeni', [
            'resurs' => $resurs,
            'title' => $resurs->naziv,
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $resurs = Resurs::find($id);
        if (!$resurs) {
            return abort(404);
        }

        $resurs->naziv = $request->input('naziv');
        $resurs->opis = $request->input('opis');
        $resurs->objavljen = $request->input('objavljen');
        $resurs->save();

        return redirect(route('resurs.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $resurs = Resurs::find($id);
        if (!$resurs) {
            return abort(404);
        }
        $resurs->objavljen = 1;
        $resurs->save();

        return redirect(route('resurs.list'));
    }

    public function unpublish($id)
    {
        $resurs = Resurs::find($id);
        if (!$resurs) {
            return abort(404);
        }
        $resurs->objavljen = 0;
        $resurs->save();

        return redirect(route('resurs.list'));
    }

    public function obrisi($id)
    {
        $resurs = Resurs::find($id);
        if (!$resurs) {
            return abort(404);
        }
        $resurs->fontovi->each(function ($font) {
            $font->fajlovi()->delete();
            $font->delete();
        });
        $resurs->videoTutorijali()->delete();
        $resurs->delete();

        return redirect(route('resurs.list'));
    }
}