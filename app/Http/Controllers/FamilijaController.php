<?php

namespace App\Http\Controllers;

use App\Models\Familija;
use Illuminate\Http\Request;

class FamilijaController extends Controller
{
    public function list(){

        $familije = Familija::all();

        return view('familija.list', [
            'title' => 'Листа врста фонта',
            'familije' => $familije
        ]);
    }

    public function unesi(){
        return view('familija.unesi', [
            'title' => 'Унеси врсту фонта'
        ]);
    }
    public function unesiSubmit(Request $request){
        $familija = new Familija();
        $familija->naziv=$request->input('naziv');
        $familija->objavljen = $request->input('objavljen');
        $familija->save();

        return redirect(route('familija.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $familija = Familija::find($id);
        if (!$familija) {
            return abort(404);
        }

        return view('familija.izmeni', [
            'familija' => $familija,
            'title' => $familija->naziv,
        ]);
    }
    public function izmeniSubmit(Request $request, $id)
    {
        $familija = Familija::find($id);
        if (! $familija) {
            return abort(404);
        }

        $familija->naziv = $request->input('naziv');
        $familija->objavljen = $request->input('objavljen');
        $familija->save();

        return redirect(route('familija.list'))->with('info', 'Запис је измењен.');
    }
    public function publish($id)
    {
        $familija = Familija::find($id);
        if (! $familija) {
            return abort(404);
        }
        $familija->objavljen = 1;
        $familija->save();

        return redirect(route('familija.list'));
    }

    public function unpublish($id)
    {
        $familija = Familija::find($id);
        if (! $familija) {
            return abort(404);
        }
        $familija->objavljen = 0;
        $familija->save();

        return redirect(route('familija.list'));
    }

    public function obrisi($id)
    {
        $familija = Familija::find($id);
        if (! $familija) {
            return abort(404);
        }
        $familija->delete();

        return redirect(route('familija.list'));
    }
}
