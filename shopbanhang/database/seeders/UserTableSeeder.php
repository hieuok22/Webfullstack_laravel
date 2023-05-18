<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        $data = [
            [
                'email' =>'levanhieu@gmail.com',
                'password' =>bcrypt('hieudz01677'),
                'level' =>1
            ],
            [
                'email' =>'admin@gmail.com',
                'password' =>bcrypt('hieudz01677'),
                'level' =>1
            ],
        ];
        \DB::table('v_users')->insert($data);
    }
}

