<?php

namespace Database\Seeders;

use App\Models\Familija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f=new Familija();
        $f->naziv='Sanserif';
        $f->save();

        $f=new Familija();
        $f->naziv='Serif';
        $f->save();

        $f=new Familija();
        $f->naziv='Slabserif';
        $f->save();

        $f=new Familija();
        $f->naziv='Knjižno pismo';
        $f->save();

        $f=new Familija();
        $f->naziv='Semiserif';
        $f->save();

        $f=new Familija();
        $f->naziv='Kurziv';
        $f->save();
    }
}
