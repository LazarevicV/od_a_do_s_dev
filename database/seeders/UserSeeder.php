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
        $user->ime_prezime = 'Petar Prvulović';
        $user->email = 'petar.prvulovic@gmail.com';
        $user->access_level = 'admin';
        $user->password = bcrypt('perapera');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Dijana Milutinović';
        $user->email = 'dijana.milutinovic@gmail.com';
        $user->access_level = 'admin';
        $user->password = bcrypt('ne znam');
        $user->save();

        $user = new User();
        $user->ime_prezime = 'Petar Prvulović';
        $user->email = 'petarprvulovic@gmail.com';
        $user->access_level = 'user';
        $user->password = bcrypt('mikamika');
        $user->save();
    }
}
