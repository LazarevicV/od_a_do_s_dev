<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->insert([

            ['naziv'=> 'EtarRNIDS-otf.zip', 'font_id'=> 1],

            ['naziv'=> 'EtarRNIDS-woff2.zip', 'font_id'=> 1],

            ['naziv'=> 'LingvaRNIDS-otf.zip', 'font_id'=> 2],

            ['naziv'=> 'LingvaRNIDS-woff2.zip', 'font_id'=> 2],

            ['naziv'=> 'OrtoRNIDS-otf.zip', 'font_id'=> 3],

            ['naziv'=> 'OrtoRNIDS-woff2.zip', 'font_id'=> 3],

            ['naziv'=> 'ArealRNIDS-otf.zip', 'font_id'=> 4],

            ['naziv'=> 'ArealRNIDS-woff2.zip', 'font_id'=> 4],

            ['naziv'=> 'Optina-otf.zip', 'font_id'=> 5],

            ['naziv'=> 'Optina-woff2.zip', 'font_id'=> 5],

            ['naziv'=> 'Optina-VF.zip', 'font_id'=> 5],
            
            ['naziv'=> 'Dijakritika-otf.zip', 'font_id'=> 6],

            ['naziv'=> 'Dijakritika-woff2.zip', 'font_id'=> 6],

            ['naziv'=> 'NocturnoBG.zip', 'font_id'=> 7],

            ['naziv'=> 'Resavska BG OTF.zip', 'font_id'=> 8],
            
            ['naziv'=> 'Resavska BG Sans OTF.zip', 'font_id'=> 9],

            ['naziv'=> 'Resavska BG Sans TTF.zip', 'font_id'=> 9],

            ['naziv'=> 'Adamant BG OTF.zip', 'font_id'=> 10],

            ['naziv'=> 'Adamant BG TTF.zip', 'font_id'=> 10],

            ['naziv'=> 'AdamantSans BG.zip', 'font_id'=> 11],

            ['naziv'=> 'NeoplantaBG.zip', 'font_id'=> 12],

            ['naziv'=> 'PlatanBG.zip', 'font_id'=> 13],

            ['naziv'=> 'NiokiBG.zip', 'font_id'=> 14],

            ['naziv'=> 'LovelyBG.zip', 'font_id'=> 15],

            ['naziv'=> 'InfluBG.zip', 'font_id'=> 16],

            ['naziv'=> 'Tesla OTF.zip', 'font_id'=> 17],

        ]);
    }
}
