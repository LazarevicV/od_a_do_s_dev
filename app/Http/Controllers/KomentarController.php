<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function dodajSubmit($blog_id, Request $request)
    {
        $komentar = new Komentar();
        $komentar->sadrzaj = $request->input('sadrzaj');
        $komentar->user_id = Auth::id();
        $komentar->blog_id = $blog_id;
        $komentar->save();

        return redirect(route('blog.blog', ['id' => $blog_id]));
    }

    public function unpublishKorisnik($id)
    {
        $komentar = Komentar::find($id);
        if (! $komentar) {
            return abort(404);
        }
        $komentar->objavljen = 0;
        $komentar->save();

        return redirect(route('blog.blog', $komentar->blog->id));
    }

    //crud metode
    public function list()
    {
        $komentari = Komentar::all();

        return view('komentar.list', [
            'komentari' => $komentari,
            'title' => 'Листа коментара',
        ]);
    }

    public function publish($id)
    {
        $komentar = Komentar::find($id);
        if (! $komentar) {
            return abort(404);
        }
        $komentar->objavljen = 1;
        $komentar->save();

        return redirect(route('komentar.list'));
    }

    public function unpublish($id)
    {
        $komentar = Komentar::find($id);
        if (! $komentar) {
            return abort(404);
        }
        $komentar->objavljen = 0;
        $komentar->save();

        return redirect(route('komentar.list'));
    }

    public function obrisi($id)
    {
        $komentar = Komentar::find($id);
        if (! $komentar) {
            return abort(404);
        }
        $komentar->user()->dissociate();
        $komentar->blog()->dissociate();
        $komentar->delete();
        $komentar->save();

        return redirect(route('komentar.list'));
    }
}
