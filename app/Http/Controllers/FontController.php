<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Font;
use Illuminate\Http\Request;

class FontController extends Controller
{
    public function list()
    {
        $fontovi = Font::all();

        return view('font.list', [
            'fontovi' => $fontovi,
            'title' => 'Листа фонтова',
        ]);
    }

    public function unesi()
    {
        return view('font.unesi', [
            'title' => 'Унеси фонт',
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $font = new Font();
        $font->naziv = $request->input('naziv');
        $font->opis = $request->input('opis');
        $font->link_detaljno = $request->input('link_detaljno');
        $font->objavljen = $request->input('objavljen');
        $font->resurs_id = $request->input('resurs_id');
        $font->save();

        return redirect(route('font.list'))->with('info', 'Запис је унет.');
    }

    public function unesifile($font_id)
    {
        $font = Font::find($font_id);
        if (! $font) {
            return abort(404);
        }

        return view('font.unesifile', [
            'font' => $font,
            'title' => 'Унеси фонт',
        ]);
    }

    public function unesifileSubmit(Request $request, $font_id)
    {
        $file = new File();
        $file->naziv = $request->input('naziv');
        $file->font_id = $request->input('font_id');
        $file->save();

        return redirect(route('font.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $font = Font::find($id);
        if (! $font) {
            return abort(404);
        }

        return view('font.izmeni', [
            'font' => $font,
            'title' => $font->naziv,
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $font = Font::find($id);
        if (! $font) {
            return abort(404);
        }

        $font->naziv = $request->input('naziv');
        $font->opis = $request->input('opis');
        $font->link_detaljno = $request->input('link_detaljno');
        $font->objavljen = $request->input('objavljen');
        $font->resurs_id = $request->input('resurs_id');
        $font->save();

        return redirect(route('font.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $font = Font::find($id);
        if (! $font) {
            return abort(404);
        }
        $font->objavljen = 1;
        $font->save();

        return redirect(route('font.list'));
    }

    public function unpublish($id)
    {
        $font = Font::find($id);
        if (! $font) {
            return abort(404);
        }
        $font->objavljen = 0;
        $font->save();

        return redirect(route('font.list'));
    }

    public function preview(Request $request)
    {
        $fonts = Font::all()->sortByDesc('id');
        $message = $request->input('message', 'Упишите поруку коју желите да видите');

        return view('fontovi', compact('fonts', 'message'), ['title' => 'Fontovi']);
    }

    public function obrisi($id)
    {
        $font = Font::find($id);
        if (! $font) {
            return abort(404);
        }
        $font->fajlovi()->delete();
        $font->delete();

        return redirect(route('font.list'));
    }
}
