<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FamilijaController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\KategorijaBlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResursController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoTutorijalController;
use App\Models\Config as ModelsConfig;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

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

Route::get('/',[Controller::class, 'pocetna'])->name('pocetna');

Route::middleware('check_ip')->group(function () {
    Route::middleware('check_role:admin')->group(function () {
        Route::controller(Controller::class)->group(function () {
            Route::get('/претрага', 'pretraga')->name('pretraga');
            Route::get('/блог-некатегорисани', 'nekategorisani_blogovi')->name('nekategorisani');
            Route::get('/блог-занимљивости', 'zanimljivosti_blogovi')->name('zanimljivosti');
            Route::get('/блог-ресурси', 'resurs_blogovi')->name('blog-resursi');
            Route::get('/блог-упутства', 'blog_uputstva')->name('uputstva');
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
        Route::get('/развој', [ResursController::class, 'razvoj'])->name('razvoj');

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
                    Route::get('/база-фонтова', [ResursController::class, 'baza_fontova'])->name('baza-fontova');
                    Route::get('/видео-туторијали', [ResursController::class, 'video_tutorijali'])->name('video-tutorijali');
                    
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
    });
});

Route::get('/dashboard', function () {
    return redirect()->route('pocetna');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

Route::prefix('/конфигурација')->group(function () {
    Route::controller(ConfigController::class)->group(function () {
        Route::name('config.')->group(function () {
            Route::middleware('check_ip')->group(function () {
                Route::middleware('check_role:admin')->group(function () {
                    Route::get('/футер-садржај', 'footer_sadrzaj')->name('footer_sadrzaj');
                    Route::get('/почетна-садржај', 'pocetna_sadrzaj')->name('pocetna_sadrzaj');
                    Route::get('/развој-садржај', 'razvoj_sadrzaj')->name('razvoj_sadrzaj');
                    Route::get('/ресурси-садржај', 'resurs_sadrzaj')->name('resurs_sadrzaj');
                    Route::get('/блог-садржај', 'blog_sadrzaj')->name('blog_sadrzaj');
                    Route::get('/алати-садржај', 'alati_sadrzaj')->name('alati_sadrzaj');
                    Route::get('/упутства-садржај', 'uputstva_sadrzaj')->name('uputstva_sadrzaj');
                    Route::get('/база-фонтова-садржај', 'baza_fontova_sadrzaj')->name('baza_fontova_sadrzaj');
                    Route::get('/видео-туторијали-садржај', 'video_tutorijali_sadrzaj')->name('video_tutorijali_sadrzaj');

                    Route::get('/izmeni/{id}', 'izmeni')->name('izmeni');
                    Route::post('/izmeni/{id}', 'izmeniSubmit')->name('izmeniSubmit');
                });
            });
        });
    });
});

require __DIR__ . '/auth.php';