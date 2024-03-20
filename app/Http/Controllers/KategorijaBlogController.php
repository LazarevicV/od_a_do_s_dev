<?php

namespace App\Http\Controllers;

use App\Models\KategorijaBlog;
use Illuminate\Http\Request;

class KategorijaBlogController extends Controller
{
    public function list(){

        $kategorije = KategorijaBlog::all();

        return view('kategorija.list', [
            'title' => 'Листа категорија блога',
            'kategorije' => $kategorije
        ]);
    }

    public function unesi(){
        return view('kategorija.unesi', [
            'title' => 'Унеси категорију'
        ]);
    }
    public function unesiSubmit(Request $request){
        $kategorija = new KategorijaBlog();
        $kategorija->naziv=$request->input('naziv');
        $kategorija->objavljen = $request->input('objavljen');
        $kategorija->save();

        return redirect(route('kategorija.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $kategorija = KategorijaBlog::find($id);
        if (!$kategorija) {
            return abort(404);
        }

        return view('kategorija.izmeni', [
            'kategorija' => $kategorija,
            'title' => $kategorija->naziv,
        ]);
    }
    public function izmeniSubmit(Request $request, $id)
    {
        $kategorija = KategorijaBlog::find($id);
        if (! $kategorija) {
            return abort(404);
        }

        $kategorija->naziv = $request->input('naziv');
        $kategorija->objavljen = $request->input('objavljen');
        $kategorija->save();

        return redirect(route('kategorija.list'))->with('info', 'Запис је измењен.');
    }
    public function publish($id)
    {
        $kategorija = KategorijaBlog::find($id);
        if (! $kategorija) {
            return abort(404);
        }
        $kategorija->objavljen = 1;
        $kategorija->save();

        return redirect(route('kategorija.list'));
    }

    public function unpublish($id)
    {
        $kategorija = KategorijaBlog::find($id);
        if (! $kategorija) {
            return abort(404);
        }
        $kategorija->objavljen = 0;
        $kategorija->save();

        return redirect(route('kategorija.list'));
    }

    public function obrisi($id)
    {
        $kategorija = KategorijaBlog::find($id);
        if (! $kategorija) {
            return abort(404);
        }
        $kategorija->delete();

        return redirect(route('kategorija.list'));
    }
}
