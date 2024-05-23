<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FamilijaController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\KategorijaBlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResursController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoTutorijalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $istaknuti_blogovi = BlogController::istaknuti();
    $broj_istaknutih = BlogController::broj_istaknutih();
    return view('pocetna', [
        'istaknuti_blogovi' => $istaknuti_blogovi,
        'title' => 'Почетна страница',
        'broj_istaknutih' => $broj_istaknutih
    ]);
})->name('pocetna');

Route::get('/блог-упутства', function () {
    $uputstva_blogovi = BlogController::uputstva();

    return view('blog.blogovi', [
        'blogovi' => $uputstva_blogovi,
        'title' => 'Упутства',
    ]);
})->name('uputstva');

Route::get('/блог-ресурси', function () {
    $resursi_blogovi = BlogController::resursi();

    return view('blog.blogovi', [
        'blogovi' => $resursi_blogovi,
        'title' => 'Ресурси',
    ]);
})->name('blog-resursi');

Route::get('/блог-занимљивости', function () {
    $zanimljivosti_blogovi = BlogController::zanimljivosti();

    return view('blog.blogovi', [
        'blogovi' => $zanimljivosti_blogovi,
        'title' => 'Занимљивости',
    ]);
})->name('zanimljivosti');

Route::get('/блог-некатегорисани', function () {
    $nekategorisani_blogovi = BlogController::nekategorisani();

    return view('blog.blogovi', [
        'blogovi' => $nekategorisani_blogovi,
        'title' => 'Некатегорисани',
    ]);
})->name('nekategorisani');


Route::controller(Controller::class)->group(function () {
    Route::get('/претрага', 'pretraga')->name('pretraga');
});

Route::get('/dashboard', function () {
    return redirect()->route('pocetna');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/блогови', [BlogController::class, 'blogovi'])->name('blog.blogovi');

Route::prefix('/блог')->group(function () {
    Route::name('blog.')->group(function () {
        Route::controller(BlogController::class)->group(function () {
            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {
                    Route::get('/листа', 'list')->name('list');
                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');
                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');
                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');
                    Route::get('/истакни/{id}', 'istakni')->name('istakni');
                    Route::get('/обриши=истакнути-блог/{id}', 'obrisi_istakni')->name('obrisi_istakni');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                });
            });

            Route::get('/{id}', 'blog')->name('blog');
        });
    });
});

Route::get('/алати', [AlatController::class, 'alati'])->name('alat.alati');

Route::prefix('/алат/')->group(function () {
    Route::controller(AlatController::class)->group(function () {
        Route::name('alat.')->group(function () {

            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {

                    Route::get('листа', 'list')->name('list');

                    Route::get('унеси', 'unesi')->name('unesi');
                    Route::post('унеси', 'unesiSubmit')->name('unesiSubmit');

                    Route::get('измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('publish/{id}', 'publish')->name('publish');
                    Route::get('unpublish/{id}', 'unpublish')->name('unpublish');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                });
            });
            Route::get('{id}', 'alat')->name('alat');
        });
    });
});

Route::get('/ресурси', [ResursController::class, 'resursi'])->name('resurs.resursi');

Route::prefix('/ресурс')->group(function () {
    Route::controller(ResursController::class)->group(function () {
        Route::name('resurs.')->group(function () {
            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {
                    Route::get('/листа', 'list')->name('list');

                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');

                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                });
            });
            Route::get('/{id}', 'resurs')->name('resurs');
        });
    });
});

Route::get('/фонтови', [FontController::class, 'preview'])->name('fontovi');
Route::post('/фонтови', [FontController::class, 'pretraga'])->name('font.pretraga');

Route::prefix('/фонт')->group(function () {
    Route::controller(FontController::class)->group(function () {
        Route::name('font.')->group(function () {
            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {
                    Route::get('/листа', 'list')->name('list');

                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');
                    Route::get('/унеси-датотеку/{font_id}', 'unesifile')->name('unesifile');
                    Route::post('/унеси-датотеку/{font_id}', 'unesifileSubmit')->name('unesifileSubmit');

                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                });
            });
            Route::get('/{font_id}', 'font')->name('font')->where('font_id', '[0-9]+');
        });
    });
});

Route::prefix('/видео-упутство')->group(function () {
    Route::controller(VideoTutorijalController::class)->group(function () {
        Route::name('videoTutorijal.')->group(function () {

            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {
                    Route::get('/листа', 'list')->name('list');

                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');

                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                });
            });
        });
    });
});

Route::middleware('check_ip')->group(function () {
    Route::middleware('check_role:admin')->group(function () {
        Route::prefix('/корисници')->group(function () {
            Route::name('korisnici.')->group(function () {
                Route::controller(UserController::class)->group(function () {
                    Route::get('/листа', 'list')->name('list');
                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');
                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');
                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');
                });
            });
        });
    });
});

Route::middleware('check_ip')->group(function () {
    Route::middleware('check_role:admin')->group(function () {
        Route::prefix('/категорије-блогова')->group(function () {
            Route::name('kategorija.')->group(function () {
                Route::controller(KategorijaBlogController::class)->group(function () {
                    Route::get('/листа', 'list')->name('list');

                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');

                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');

                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');
                });
            });
        });
    });
});

Route::middleware('check_ip')->group(function () {
    Route::middleware('check_role:admin')->group(function () {
        Route::prefix('/врста-фонта')->group(function () {
            Route::name('familija.')->group(function () {
                Route::controller(FamilijaController::class)->group(function () {
                    Route::get('/листа', 'list')->name('list');

                    Route::get('/унеси', 'unesi')->name('unesi');
                    Route::post('/унеси', 'unesiSubmit')->name('unesiSubmit');

                    Route::get('/измени/{id}', 'izmeni')->name('izmeni');
                    Route::post('/измени/{id}', 'izmeniSubmit')->name('izmeniSubmit');

                    Route::get('/обриши/{id}', 'obrisi')->name('obrisi');

                    Route::get('/publish/{id}', 'publish')->name('publish');
                    Route::get('/unpublish/{id}', 'unpublish')->name('unpublish');
                });
            });
        });
    });
});

require __DIR__ . '/auth.php';
