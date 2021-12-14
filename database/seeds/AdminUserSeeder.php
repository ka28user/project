<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1人目の管理者ユーザー
        User::create([
                'name' => '管理者user001',
                'email' => 'admin_user001@example.com',
                'password' => Hash::make('Admin001'),
            ]);
    }
}
