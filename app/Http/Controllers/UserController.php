<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list() {
        $users = User::all();
        return view('user.list', ['users' => $users, 'title' => 'Корисници']);
    }

    public function izmeni($id) {
        $user = User::find($id);
        if(!$user) return abort(404);
        return view('user.izmeni', ['user' => $user, 'title' => 'Измени корисника']);
    }

    public function izmeniSubmit($id, Request $request) {
        $user = User::find($id);
        if(!$user) return abort(404);
        $user->ime_prezime = $request->input('ime_prezime');
        $user->email = $request->input('email');
        $user->access_level = $request->input('access_level');
        $sifra = $request->input('sifra');
        if ($sifra != '') {
            $user->password = bcrypt($sifra);
        }
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect()->route('korisnici.list');
    }

    public function obrisi($id) {
        $user = User::find($id);
        if(!$user) return abort(404);
        $user->delete();
        return redirect()->route('korisnici.list');
    }

    public function unesi() {
        return view('user.unesi', ['title' => 'Унеси корисника']);
    }

    public function unesiSubmit(Request $request) {
        $user = new User();
        $user->ime_prezime = $request->input('ime_prezime');
        $user->email = $request->input('email');
        $user->access_level = $request->input('access_level');
        $sifra = $request->input('sifra');
        if ($sifra != '') {
            $user->password = bcrypt($sifra);
        }
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
        return redirect()->route('korisnici.list');
    }
}
