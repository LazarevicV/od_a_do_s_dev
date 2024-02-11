<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogovi()
    {
        $blogovi = Blog::all();
        $istaknuti_blogovi = BlogController::istaknuti();

        return view('blog.blogovi', [
            'blogovi' => $blogovi,
            'istaknuti_blogovi' => $istaknuti_blogovi,
            'title' => 'Блогови',
        ]);
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }

        return view('blog.blog', [
            'blog' => $blog,
            'title' => $blog->naslov,
        ]);
    }

    public static function istaknuti(){
        $blogovi=Blog::where('istaknut', 1)->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function uputstva()
    {
        $blogovi = Blog::where('kategorija', 'Упутства')->where('objavljen', 1)->get();

        return $blogovi;
    }

    //crud metode
    public function list()
    {
        $blogovi = Blog::all();

        return view('blog.list', [
            'blogovi' => $blogovi,
            'title' => 'Листа блогова',
        ]);
    }

    public function unesi()
    {
        return view('blog.unesi', [
            'title' => 'Унеси блог',
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $blog = new Blog();
        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->kategorija = $request->input('kategorija');
        $blog->slika = $request->input('slika');
        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }

        return view('blog.izmeni', [
            'blog' => $blog,
            'title' => $blog->naslov,
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }

        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->kategorija = $request->input('kategorija');
        $blog->slika = $request->input('slika');
        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }
        $blog->objavljen = 1;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function unpublish($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }
        $blog->objavljen = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function istakni($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }
        $blog->istaknut = 1;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function obrisi_istakni($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }
        $blog->istaknut = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function obrisi($id)
    {
        $blog = Blog::find($id);
        if (! $blog) {
            return abort(404);
        }
        $blog->komentari()->delete();
        $blog->delete();

        return redirect(route('blog.list'));
    }
}
