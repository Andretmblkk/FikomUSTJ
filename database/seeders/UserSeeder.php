<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cek apakah user admin sudah ada
        if (User::where('email', 'admin@fikom.ustj.ac.id')->exists()) {
            $this->command->info('User admin sudah ada, skip...');
            return;
        }

        // Buat user admin
        User::create([
            'name' => 'Admin FIKOM',
            'email' => 'admin@fikom.ustj.ac.id',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('User admin berhasil dibuat!');
        $this->command->info('Email: admin@fikom.ustj.ac.id');
        $this->command->info('Password: password');
    }
}

