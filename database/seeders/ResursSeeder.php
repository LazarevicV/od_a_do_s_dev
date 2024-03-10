<?php

namespace Database\Seeders;

use App\Models\Resurs;
use Illuminate\Database\Seeder;

class ResursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $r = new Resurs();
        $r->naziv = 'База фонтова';
        $r->opis = 'Фонтови играју кључну улогу у дизајну пружајући визуелни идентитет, тон и побољшавајући читљивост. За дизајнере који стварају садржај на српском, доступност различитих ћириличних фонтова је од суштинског значаја, омогућавајући им усаглашавање са културним нијансама и постизање хармоничне комбинације естетског привлачења и језичке аутентичности у њиховим дизајнима.';
        $r->objavljen = true;
        $r->save();

        $r = new Resurs();
        $r->naziv = 'Видео туторијали';
        $r->opis = '
        Видео туториали представљају неизоставан извор образовања за широк спектар интересовања, укључујући области као што су SEO оптимизација и употреба ћирилице. Ови туториали обезбеђују визуелно и лако разумљиво учење, што је посебно битно за брзо усвајање и примену комплексних концепата. Независно од области примене, видео туториали су кључни за унапређење разумевања и успешну примену различитих вештина и техника.';
        $r->objavljen = true;
        $r->save();
    }
}
