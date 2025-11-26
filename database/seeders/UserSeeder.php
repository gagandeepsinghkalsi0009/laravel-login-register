<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Data;
use Faker\Factory as Faker; 
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i<10 ; $i++) {
            $user = User::create([
            'email'=>$faker->email,
            'password'=>Hash::make($faker->password),
            'user_type'=>$faker->numberBetween(1,2),
            ]);

            $data = Data::create([
                'name'=>$faker->name,
                'mobile'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'user_id'=>$user->id,
            ]);
        }
        
    }
}
