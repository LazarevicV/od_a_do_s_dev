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
        $kb->naziv = 'упутство';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 2;
        $kb->naziv = 'ресурс';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 3;
        $kb->naziv = 'занимљивост';
        $kb->objavljen = 1;
        $kb->save();

        $kb = new KategorijaBlog();
        $kb->id = 4;
        $kb->naziv = 'некатегорисан';
        $kb->objavljen = 1;
        $kb->save();
    }
}
