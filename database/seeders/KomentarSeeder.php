<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Komentar;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала на одличном садржају!';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 1;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Благодарим за ово корисно информативно дељење.';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 1;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Сјајан текст, хвала вам на труду!';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 1;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Одличан чланак, хвала за поделу!';
        $k->objavljen = true;
        $k->user_id = 4;
        $k->blog_id = 1;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Захваљујем на дивном садржају!';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 1;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала вам што делите ово са нама.';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 3;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Благодарим на саветима и информацијама.';
        $k->objavljen = true;
        $k->user_id = 4;
        $k->blog_id = 3;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Супер текст, велика хвала!';
        $k->objavljen = true;
        $k->user_id = 4;
        $k->blog_id = 3;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Захваљујем вам на увек квалитетним информацијама.';
        $k->objavljen = true;
        $k->user_id = 4;
        $k->blog_id = 3;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Веома корисно, хвала вам пуно!';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 8;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала вам на инспиративном садржају!';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 8;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Одличан рад, хвала на делењу!';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 8;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Велика благодарност за ове интересантне информације.';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 8;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала на свакодневном дози јако корисних текстова.';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 2;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Благодарим вам на труду у стварању оваквог садржаја.';
        $k->objavljen = true;
        $k->user_id = 2;
        $k->blog_id = 2;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала вам на овој изузетној информацији.';
        $k->objavljen = true;
        $k->user_id = 1;
        $k->blog_id = 2;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Свака част на тексту, хвала вам!';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 4;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Одличан рад, хвала што нас обогатите оваквим информацијама.';
        $k->objavljen = true;
        $k->user_id = 1;
        $k->blog_id = 4;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Хвала вам на вредним идејама и саветима.';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 4;
        $k->save();

        $k = new Komentar();
        $k->created_at = date('Y-m-d H:i:s');
        $k->updated_at = date('Y-m-d H:i:s');
        $k->sadrzaj = 'Велика хвала за свакодневну дозу позитивне енергије и информација.';
        $k->objavljen = true;
        $k->user_id = 3;
        $k->blog_id = 4;
        $k->save();

    }
}
