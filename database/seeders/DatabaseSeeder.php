<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@corealign.com'],
            [
                'name' => 'Admin Staff',
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            ]
        );

        \App\Models\User::firstOrCreate(
            ['email' => 'customer@corealign.com'],
            [
                'name' => 'Sarah Customer',
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            ]
        );

        // Seed sample classes
        \App\Models\PilatesClass::firstOrCreate(
            ['name' => 'Reformer Flow'],
            [
                'type' => 'Reformer',
                'start_time' => now()->addDays(1)->setTime(9, 0, 0),
                'instructor_name' => 'Elena K.',
                'capacity' => 10,
                'enrolled' => 5,
                'status' => 'Confirmed'
            ]
        );

        \App\Models\PilatesClass::firstOrCreate(
            ['name' => 'Tower Intensive'],
            [
                'type' => 'Tower',
                'start_time' => now()->addDays(2)->setTime(10, 0, 0),
                'instructor_name' => 'Sarah L.',
                'capacity' => 8,
                'enrolled' => 8,
                'status' => 'Confirmed'
            ]
        );

        \App\Models\PilatesClass::firstOrCreate(
            ['name' => 'Restorative Stretch'],
            [
                'type' => 'Mat',
                'start_time' => now()->addDays(3)->setTime(18, 0, 0),
                'instructor_name' => 'Marcus J.',
                'capacity' => 15,
                'enrolled' => 2,
                'status' => 'Confirmed'
            ]
        );
    }
}
