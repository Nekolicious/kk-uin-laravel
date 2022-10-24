<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Verified;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'nipnim' => '111',
                'email' => 'admin@uinsgd.ac.id',
                'notelp' => '00000000000',
                'kk_id' => '1',
                'is_admin' => '1',
                'is_approve' => '1',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
