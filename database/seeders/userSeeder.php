<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'level'=>'admin',
            'name'=>'natasya cantik',
            'email'=>'natsyacantik@gmail.com',
            'password'=>bcrypt('123')
        ]);
        User::create([
            'level'=>'pelamar',
            'name'=>'yuyun imut',
            'email'=>'yuyunimut@gmail.com',
            'password'=>bcrypt('123')
        ]);
    }
}
