<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->ime_prezime = 'Pera Peric';
        $user->email = 'peraperic@gmail.com';
        $user->access_level = 'admin';
        $user->password = bcrypt('perapera');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Mika Mikic';
        $user->email = 'mikamikic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('mikamika');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Milica Milic';
        $user->email = 'milicamilic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('milicamilica');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Nikola Nikolic';
        $user->email = 'nikolanikolic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('nikolanikola');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Zika Zikic';
        $user->email = 'zikazikic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('zikazika');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Prle Prlic';
        $user->email = 'prleprlic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('prleprle');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Krle Krlic';
        $user->email = 'krlekrlic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('krlekrle');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->save();
    }
}
