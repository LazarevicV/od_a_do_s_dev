<?php

namespace Database\Seeders;

use App\Models\Kontakt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontaktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $k = new Kontakt();
        $k->email = 'pericaperic@gmail.com';
        $k->sadrzaj = 'Ovo je neki sadrzaj';
        $k->save();

        $k = new Kontakt();
        $k->email = 'mikamikic@gmail.com';
        $k->sadrzaj = 'Ovo je neki drugi sadrzaj';
        $k->procitano = true;
        $k->save();

        $k = new Kontakt();
        $k->email = 'zikazikic@gmail.com';
        $k->sadrzaj = 'Ovo je neki treci sadrzaj';
        $k->save();

        $k = new Kontakt();
        $k->email = 'milanmilanovic@gmail.com';
        $k->sadrzaj = 'Ovo je neki cetvrti sadrzaj';
        $k->procitano = true;
        $k->save();
    }
}
