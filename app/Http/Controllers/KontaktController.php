<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontakt;

class KontaktController extends Controller
{
    public function index()
    {
        $neprocitano = Kontakt::where('procitano', false)->get();
        $procitano = Kontakt::where('procitano', true)->get();
        return view('kontakt.list', ['title' => 'Поруке', 'procitano' => $procitano, 'neprocitano' => $neprocitano]);
    }

    public function procitano($id)
    {
        $k = Kontakt::find($id);
        if (!$k) {
            return redirect()->route('kontakt.list');
        }
        $k->procitano = true;
        $k->save();
        return redirect()->route('kontakt.list');
    }

    public function obrisi($id)
    {
        $k = Kontakt::find($id);
        if (!$k or $k->procitano == false) {
            return redirect()->route('kontakt.list');
        }
        $k->delete();
        return redirect()->route('kontakt.list');
    }
}
