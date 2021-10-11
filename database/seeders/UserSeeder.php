<?php

namespace Database\Seeders;

use App\Models\User;
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
      User::create([
          'name' => "emilio vega",
          "email" => "vegacuantum@hotmail.com",
          "password" => bcrypt('fisica123')
      ]);
    }
}
