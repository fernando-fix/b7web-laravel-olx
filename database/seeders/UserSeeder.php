<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Teste teste',
                'email' => 'teste@teste.com',
                'password' => '123123123',
            ],
        ];

        foreach ($users as $key => $data) {
            $user = User::where('email', $data['email'])->first();

            if (!$user) {
                User::create($data);
            }
        }
    }
}
