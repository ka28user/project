<?php

use Illuminate\Database\Seeder;
use App\User;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //3件のテストユーザーを登録する 
        for( $cnt = 1; $cnt <= 3; $cnt++ ) { 
            $faker = Faker\Factory::create('ja_JP');
            User::create([
                    // 'name' => $faker->lastName. ' ' . $faker->firstName,
                    'name' => $faker->lastName. ' ' . 'ダミー',
                    'email' => $faker->email,
                    'password' => Hash::make('testtest'),
                ]);
        }
    }
}
