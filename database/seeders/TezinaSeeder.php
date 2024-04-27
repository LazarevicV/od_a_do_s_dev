<?php

namespace Database\Seeders;

use App\Models\Tezina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TezinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t=new Tezina();
        $t->naziv='regular';
        $t->save();

        $t=new Tezina();
        $t->naziv='italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='bold';
        $t->save();

        $t=new Tezina();
        $t->naziv='bold_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='hairline';
        $t->save();

        $t=new Tezina();
        $t->naziv='thin';
        $t->save();

        $t=new Tezina();
        $t->naziv='thin_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='extra_light';
        $t->save();

        $t=new Tezina();
        $t->naziv='light';
        $t->save();

        $t=new Tezina();
        $t->naziv='medium';
        $t->save();

        $t=new Tezina();
        $t->naziv='semi_bold';
        $t->save();

        $t=new Tezina();
        $t->naziv='extra_bold';
        $t->save();

        $t=new Tezina();
        $t->naziv='black';
        $t->save();

        $t=new Tezina();
        $t->naziv='hairline_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='extra_light_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='light_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='medium_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='semi_bold_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='extra_bold_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='black_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='extra_black_italic';
        $t->save();

        $t=new Tezina();
        $t->naziv='heavy';
        $t->save();

        $t=new Tezina();
        $t->naziv='heavy_italic';
        $t->save();
    }
}
