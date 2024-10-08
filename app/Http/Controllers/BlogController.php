<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Config;
use App\Models\KategorijaBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogovi()
    {
        $blogovi = Blog::where('objavljen', 1)->get();
        $istaknuti_blogovi = BlogController::istaknuti();
        $parametri = Config::where('parametar_name', 'like', 'blogovi_%')->get();

        return view('blog.blogovi', [
            'blogovi' => $blogovi,
            'istaknuti_blogovi' => $istaknuti_blogovi,
            'title' => 'Блогови',
            'parametri'=>$parametri
        ]);
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }

        return view('blog.blog', [
            'id' => $id,
            'blog' => $blog,
            'title' => $blog->naslov,
        ]);
    }

    public static function istaknuti()
    {
        $blogovi = Blog::where('istaknut', 1)->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function uputstva()
    {
        $blogovi = Blog::where('kategorija_id', '1')->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function resursi()
    {
        $blogovi = Blog::where('kategorija_id', '2')->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function zanimljivosti()
    {
        $blogovi = Blog::where('kategorija_id', '3')->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function nekategorisani()
    {
        $blogovi = Blog::where('kategorija_id', '4')->where('objavljen', 1)->get();
        return $blogovi;
    }

    public static function broj_istaknutih()
    {
        $broj_istaknutih= Blog::where('istaknut', 1)->count();

        return $broj_istaknutih;
    }

    //crud metode
    public function list()
    {
        $broj_istaknutih= Blog::where('istaknut', 1)->count();
        $blogovi = Blog::all();

        return view('blog.list', [
            'blogovi' => $blogovi,
            'title' => 'Листа блогова',
            'broj_istaknutih'=> $broj_istaknutih
        ]);
    }

    public function unesi()
    {
        $kategorije = KategorijaBlog::where('objavljen', 1)->get();
        return view('blog.unesi', [
            'title' => 'Унеси блог',
            'kategorije' => $kategorije
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $blog = new Blog();
        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->kategorija_id = $request->input('kategorija');

        if ($request->hasFile('slika')) {
            $slika = $request->file('slika');
            $imeSlike = time() . '.' . $slika->getClientOriginalExtension();
            $slika->move(public_path('img'), $imeSlike);
            $blog->slika = $imeSlike;
        }

        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је унет.');
    }


    public function izmeni($id)
    {
        $blog = Blog::find($id);
        $kategorije = KategorijaBlog::where('objavljen', 1)->get();
        if (!$blog) {
            return abort(404);
        }

        return view('blog.izmeni', [
            'blog' => $blog,
            'title' => $blog->naslov,
            'kategorije' => $kategorije
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }

        $blog->naslov = $request->input('naslov');
        $blog->sadrzaj = $request->input('sadrzaj');
        $blog->kategorija_id = $request->input('kategorija');

        if ($request->hasFile('slika')) {
            $staraSlika = public_path('img/' . $blog->slika);
            if (file_exists($staraSlika)) {
                @unlink($staraSlika);
            }
            $slika = $request->file('slika');
            $imeSlike = time() . '.' . $slika->getClientOriginalExtension();
            $slika->move(public_path('img'), $imeSlike);
            $blog->slika = $imeSlike;
        }

        $blog->objavljen = $request->input('objavljen');
        $blog->istaknut = $request->input('istaknut');
        $blog->save();

        return redirect(route('blog.list'))->with('info', 'Запис је измењен.');
    }



    public function publish($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->objavljen = 1;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function unpublish($id)
    {
        $blog = Blog::find($id);
        if ($blog->istaknut==1) {
            return redirect(route('blog.list'))->with('info', 'Блог не може бити сакривен ако је истакнут.');
        }
        if (!$blog) {
            return abort(404);
        }
        $blog->objavljen = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function istakni($id)
    {
        $blog = Blog::find($id);
        if ($blog->objavljen==0) {
            return redirect(route('blog.list'))->with('info', 'Блог не може бити истакнут ако је сакривен.');
        }
        $broj_istaknutih= Blog::where('istaknut', 1)->count();
        if ($broj_istaknutih<7) {
            if (!$blog) {
                return abort(404);
            }
            $blog->istaknut = 1;
            $blog->save();
            return redirect(route('blog.list'));
        }
        else {
            return redirect(route('blog.list'))->with('info', 'Максималан број истакнутих блогова је 7.');
        }
    }

    public function obrisi_istakni($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        $blog->istaknut = 0;
        $blog->save();

        return redirect(route('blog.list'));
    }

    public function obrisi($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return abort(404);
        }
        if ($blog->istaknut=1) {
            return redirect(route('blog.list'))->with('info', 'Блогови који су истакнути не могу бити обрисани.');
        }
        $blog->delete();

        return redirect(route('blog.list'));
    }
}
