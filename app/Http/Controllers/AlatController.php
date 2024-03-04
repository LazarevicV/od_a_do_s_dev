<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function alati()
    {
        $alati = Alat::all();

        return view('alat.alati', [
            'alati' => $alati,
            'title' => 'Алати',
        ]);
    }

    public function alat($id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }

        return view('alat.alat', [
            'alat' => $alat,
            'title' => $alat->naziv,
        ]);
    }

    //crud metode
    public function list()
    {
        $alati = Alat::all();

        return view('alat.list', [
            'alati' => $alati,
            'title' => 'Листа алата',
        ]);
    }

    public function unesi()
    {
        return view('alat.unesi', [
            'title' => 'Унеси алат',
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $alat = new Alat();
        $alat->naziv = $request->input('naziv');
        $alat->opis = $request->input('opis');
        $alat->objavljen = $request->input('objavljen');
        $alat->url = $request->input('url');
        $alat->save();

        return redirect(route('alat.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }

        return view('alat.izmeni', [
            'alat' => $alat,
            'title' => $alat->naziv,
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }

        $alat->naziv = $request->input('naziv');
        $alat->opis = $request->input('opis');
        $alat->objavljen = $request->input('objavljen');
        $alat->url = $request->input('url');
        $alat->save();

        return redirect(route('alat.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }
        $alat->objavljen = 1;
        $alat->save();

        return redirect(route('alat.list'));
    }

    public function unpublish($id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }
        $alat->objavljen = 0;
        $alat->save();

        return redirect(route('alat.list'));
    }

    public function obrisi($id)
    {
        $alat = Alat::find($id);
        if (! $alat) {
            return abort(404);
        }
        $alat->delete();

        return redirect(route('alat.list'));
    }
}
