<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'super admin',
            'email'=>'super_admin@app.com',
            'password'=>bcrypt('123456'),
            'type'=>'super_admin',
            'active'=>1
        ]);
    }
}
