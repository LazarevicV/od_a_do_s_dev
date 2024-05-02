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
        $f->objavljen=1;
        $f->save();

        $f=new Familija();
        $f->naziv='Serif';
        $f->objavljen=1;
        $f->save();

        $f=new Familija();
        $f->naziv='Slabserif';
        $f->objavljen=1;
        $f->save();

        $f=new Familija();
        $f->naziv='Knjižno pismo';
        $f->objavljen=1;
        $f->save();

        $f=new Familija();
        $f->naziv='Semiserif';
        $f->objavljen=1;
        $f->save();

        $f=new Familija();
        $f->naziv='Kurziv';
        $f->objavljen=1;
        $f->save();
    }
}
