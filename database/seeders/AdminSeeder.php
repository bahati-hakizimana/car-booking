<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->first_name = "Emmanuel";
        $user->last_name = "ngwakoni";
        $user->email = "ngwakoni@gmail.com";
        $user->phone = "";
        $user->address="Kigali";
        $user->password = Hash::make('11111111');
        $user->user_type = 1;
        $user->save();
    }
}
