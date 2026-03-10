<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::create([
            'name'=>'John Doe',
            'email'=>'john.doe@example.com',
            'city' => 'Bangalore',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);
    }
}
