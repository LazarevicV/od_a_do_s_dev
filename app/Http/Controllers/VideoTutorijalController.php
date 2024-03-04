<?php

namespace App\Http\Controllers;

use App\Models\VideoTutorijal;
use Illuminate\Http\Request;

class VideoTutorijalController extends Controller
{
    public function list()
    {
        $videoTutorijali = VideoTutorijal::all();

        return view('videoTutorijal.list', [
            'title' => 'Видео туторијали',
            'videoTutorijali' => $videoTutorijali,
        ]);
    }

    public function unesi()
    {
        return view('videoTutorijal.unesi', [
            'title' => 'Унеси видео туторијал',
        ]);
    }

    public function unesiSubmit(Request $request)
    {
        $videoTutorijal = new VideoTutorijal();
        $videoTutorijal->naziv = $request->input('naziv');
        $videoTutorijal->opis = $request->input('opis');
        $videoTutorijal->embed_video = $request->input('embed_video');
        $videoTutorijal->objavljen = $request->input('objavljen');
        $videoTutorijal->resurs_id = $request->input('resurs_id');
        $videoTutorijal->save();

        return redirect(route('videoTutorijal.list'))->with('info', 'Запис је унет.');
    }

    public function izmeni($id)
    {
        $videoTutorijal = VideoTutorijal::find($id);
        if (! $videoTutorijal) {
            return abort(404);
        }

        return view('videoTutorijal.izmeni', [
            'videoTutorijal' => $videoTutorijal,
            'title' => $videoTutorijal->naziv,
        ]);
    }

    public function izmeniSubmit(Request $request, $id)
    {
        $videoTutorijal = VideoTutorijal::find($id);
        if (! $videoTutorijal) {
            return abort(404);
        }
        $videoTutorijal->naziv = $request->input('naziv');
        $videoTutorijal->opis = $request->input('opis');
        $videoTutorijal->embed_video = $request->input('embed_video');
        $videoTutorijal->objavljen = $request->input('objavljen');
        $videoTutorijal->resurs_id = $request->input('resurs_id');
        $videoTutorijal->save();

        return redirect(route('videoTutorijal.list'))->with('info', 'Запис је измењен.');
    }

    public function publish($id)
    {
        $videoTutorijal = VideoTutorijal::find($id);
        if (! $videoTutorijal) {
            return abort(404);
        }
        $videoTutorijal->objavljen = 1;
        $videoTutorijal->save();

        return redirect(route('videoTutorijal.list'));
    }

    public function unpublish($id)
    {
        $videoTutorijal = VideoTutorijal::find($id);
        if (! $videoTutorijal) {
            return abort(404);
        }
        $videoTutorijal->objavljen = 0;
        $videoTutorijal->save();

        return redirect(route('videoTutorijal.list'));
    }

    public function obrisi($id)
    {
        $font = VideoTutorijal::find($id);
        if (! $font) {
            return abort(404);
        }
        $font->delete();

        return redirect(route('videoTutorijal.list'));
    }
}
