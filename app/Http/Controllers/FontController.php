<?php

namespace App\Http\Controllers;

use App\Models\Familija;
use App\Models\File;
use App\Models\Font;
use App\Models\Tezina;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File as TestingFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

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
    public function font($font_id=null)
    {
        $font = Font::find($font_id);
        if (!$font) {
            return abort(404);
        }

        return view('font.font', [
            'id' => $font_id,
            'font' => $font,
            'title' => $font->naziv,
        ]);
    }

    public function unesi()
    {
        $familije=Familija::all();
        $tezine=Tezina::all();
        return view('font.unesi', [
            'title' => 'Унеси фонт',
            'familije' => $familije,
            'tezine' => $tezine
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
        $font->familija_id = $request->input('familija');
        $font->save();

        $tezine = $request->input('tezine', []);
        foreach ($tezine as $kljuc => $id) {
            DB::table('tezinas_fonts')->insert([
                ['font_id'=> intval($font->id), 'tezina_id'=> intval($id)],
            ]);
        }

        return redirect(route('font.list'))->with('info', 'Запис је унет.');
    }

    public function unesifile($font_id)
    {
        $font = Font::find($font_id);
        if (!$font) {
            return abort(404);
        }

        return view('font.unesifile', [
            'font' => $font,
            'title' => 'Унеси фонт',
        ]);
    }

    // public function unesifileSubmit(Request $request, $font_id)
    // {
    //     $font = Font::find($font_id);
    //     if (!$font) {
    //         return abort(404);
    //     }
    //     if ($request->hasFile('fajl')) {
    //         $file = $request->file('fajl');
    //         // $naziv=time() . '_' . $file->getClientOriginalName();
    //         $naziv=$file->getClientOriginalName();
    //         $path=$file->storeAs('public/fonts/cirilica', $naziv);
    //         $destination=public_path('\fonts\cirilica');
    //         $file->move($destination, $path);
                
    //         Storage::delete($path);
            
    //         if ($file->getClientOriginalExtension() == 'zip' && empty($font->fajlovi[0])) {
    //             $zip = new ZipArchive();
    //             $zipPath = $destination . '/' . $naziv;
    
    //             if ($zip->open($zipPath) === true) {
    //                 $extractPath = $destination . '/fontovi';
    //                 $zip->extractTo($extractPath);
    //                 $zip->close();
    //             }
    //         }

    //         $newFile = new File();
    //         $newFile->font_id = $font->id;
    //         $newFile->naziv = $naziv;
    //         $newFile->save();
    //     }

    //     return redirect(route('font.list'))->with('info', 'Запис је унет.');
    // }

    public function unesifileSubmit(Request $request, $font_id)
    {
        $font = Font::find($font_id);
        if (!$font) {
            return abort(404);
        }
    
        if ($request->hasFile('fajl')) {
            $file = $request->file('fajl');
            $naziv = $file->getClientOriginalName();
            $path = $file->storeAs('public/fonts/cirilica', $naziv);
            $destination = public_path('\fonts\cirilica');
            $file->move($destination, $naziv);
    
            Storage::delete('public/fonts/cirilica/' . $naziv);
    
            if ($file->getClientOriginalExtension() == 'zip' && empty($font->fajlovi[0])) {
                $zip = new ZipArchive();
                $zipPath = $destination . '/' . $naziv;
    
                if ($zip->open($zipPath) === true) {
                    $extractPath = $destination . '/fontovi';
                    // Extract files individually, checking if it's not a directory
                    for ($i = 0; $i < $zip->numFiles; $i++) {
                        $fileName = $zip->getNameIndex($i);
                        // Check if the entry is a directory
                        if (substr($fileName, -1) !== '/') {
                            $fileContents = $zip->getFromIndex($i);
                            file_put_contents($extractPath . '/' . basename($fileName), $fileContents);
                        }
                    }
                    $zip->close();
                }
            }
    
            $newFile = new File();
            $newFile->font_id = $font->id;
            $newFile->naziv = $naziv;
            $newFile->save();
        }
    
        return redirect(route('font.list'))->with('info', 'Запис је унет.');
    }
    

    public function izmeni($id)
    {
        $font = Font::find($id);
        if (!$font) {
            return abort(404);
        }
        $familije=Familija::all();
        $tezine=Tezina::all();

        return view('font.izmeni', [
            'font' => $font,
            'title' => $font->naziv,
            'familije' => $familije,
            'tezine' => $tezine
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $font = Font::find($id);
        if (!$font) {
            return abort(404);
        }

        $font->naziv = $request->input('naziv');
        $font->opis = $request->input('opis');
        $font->link_detaljno = $request->input('link_detaljno');
        $font->objavljen = $request->input('objavljen');
        $font->resurs_id = $request->input('resurs_id');
        $font->familija_id = $request->input('familija');
        $font->save();
        $font->tezine()->detach();
        $tezine = $request->input('tezine', []);
        foreach ($tezine as $kljuc => $id) {
            DB::table('tezinas_fonts')->insert([
                ['font_id'=> intval($font->id), 'tezina_id'=> intval($id)],
            ]);
        }

        return redirect(route('font.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $font = Font::find($id);
        if (!$font) {
            return abort(404);
        }
        $font->objavljen = 1;
        $font->save();

        return redirect(route('font.list'));
    }

    public function unpublish($id)
    {
        $font = Font::find($id);
        if (!$font) {
            return abort(404);
        }
        $font->objavljen = 0;
        $font->save();

        return redirect(route('font.list'));
    }
    public function preview(Request $request)
    {
        $fonts = Font::all()->sortBy('id');
        $familije = Familija::all();
        $tezine = Tezina::all();
    
        return view('fontovi', [
            'title' => 'Фонтови',
            'fonts' => $fonts,
            'familije' => $familije,
            'tezine'=>$tezine
        ]);
    }

    public function pretraga(Request $request)
    {
        $familije = Familija::all();
        $tezine = Tezina::all();
        if (!empty($request->input('pretraga'))) {
            $upit=$request->input('pretraga');
            $pretraga = Font::where(function($query) use ($upit) {
                $query->where('naziv', 'LIKE', "%$upit%")->orWhere('opis', 'LIKE', "%$upit%");
            })->where('objavljen', 1)->get();
        }
        else {
            if (!empty($request->input('familija')) && !empty($request->input('tezina_id'))) {
                $familija_id = $request->input('familija');
                $tezina_id = $request->input('tezina_id');

                $pretraga = Font::where('familija_id', $familija_id)
                    ->whereHas('tezine', function ($query) use ($tezina_id) {
                        $query->where('tezinas.id', $tezina_id);
                    })
                    ->where('objavljen', 1)
                    ->get();
            }
            else if (empty($request->input('tezina_id')) && !empty($request->input('familija'))) {
                $familija_id=$request->input('familija');
                $pretraga = Font::where('familija_id', $familija_id)->where('objavljen', 1)->get();
            }
            else if (empty($request->input('familija')) && !empty($request->input('tezina_id'))) {
                $tezina_id=$request->input('tezina_id');
                $pretraga = Font::whereHas('tezine', function ($query) use ($tezina_id) {
                    $query->where('tezinas.id', $tezina_id);
                })->get();

            }
            if (empty($pretraga)) {
                return redirect(route('fontovi'));
            }
        }

        return view('fontovi', [
            'title' => 'Фонтови',
            'fonts' => $pretraga,
            'familije' => $familije,
            'tezine'=>$tezine,
            'message'=>$request->input('message')
        ]);
    }

    public function obrisi($id)
    {
        $font = Font::find($id);
        if (!$font) {
            return abort(404);
        }
        $font->tezine()->detach();
        foreach ($font->fajlovi as $fajl) {
            $path = public_path("fonts\cirilica\\" . $fajl->naziv);
            if (file_exists($path)) {
                // dd($path);
                unlink($path);
            }
        }
        $font->fajlovi()->delete();
        $font->delete();

        return redirect(route('font.list'));
    }
}
