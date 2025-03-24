<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'is_admin' => 1,
            'name' => 'Thodoris Nikolaidis',
            'email' => 'thodorisniknik@gmail.com',
            'password' => bcrypt('paokara44'),
        ]);
    }
}
