<?php namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstname' => 'John',
            'middlename' => 'John',
            'lastname' => 'Doe',
            'contact_number' => '092393939933',
            'course' => 'BSIT',
            'year' => 2
        ]);
    }
}
