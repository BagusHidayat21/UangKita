<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Goal;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Default Admin User
        $admin = User::firstOrCreate(
            ['username' => 'admin'],
            [
                'email' => 'admin@uangkita.com',
                'password' => Hash::make('admin123'),
            ]
        );

        // Seed Initial Sample Goals for Admin
        if ($admin->goals()->count() === 0) {
            Goal::create([
                'user_id' => $admin->id,
                'name' => 'Tabungan Laptop Baru',
                'jumlah' => 3500000,
                'target' => 12000000,
                'kategori' => 'electronics',
                'catatan' => 'Menabung bulanan untuk upgrade laptop pemrograman.',
            ]);

            Goal::create([
                'user_id' => $admin->id,
                'name' => 'Dana Darurat Makanan',
                'jumlah' => 1500000,
                'target' => 3000000,
                'kategori' => 'casual',
                'catatan' => 'Alokasi cadangan keuangan harian.',
            ]);
        }
    }
}
