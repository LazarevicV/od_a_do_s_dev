<?php

namespace Database\Seeders;

use App\Models\KategorijaBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijaBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $kb = new KategorijaBlog();
        $kb->id = 1;
        $kb->naziv = 'Упутства';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 2;
        $kb->naziv = 'Ресурси';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 3;
        $kb->naziv = 'Занимљивости';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 4;
        $kb->naziv = 'Некатегорисани';
        $kb->objavljen = 1;
        $kb->save();
    }
}
