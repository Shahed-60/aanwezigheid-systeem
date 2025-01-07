<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Generate sample students
        $students = [];
        for ($i = 1; $i <= 10; $i++) {
            $students[] = [
                'name' => 'Student' . $i,
                'lastname' => 'Lastname' . $i,
                'birthdate' => Carbon::now()->subYears(rand(18, 25))->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('students')->insert($students);

        // Generate sample absences
    //     $dateAbsences = [];
    //     for ($i = 1; $i <= 10; $i++) {
    //         $dateAbsences[] = [
    //             'student_id' => rand(1, 10),
    //             'date' => Carbon::now()->subDays(rand(1, 30))->format('Y-m-d'),
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ];
    //     }
    //     DB::table('date_absences')->insert($dateAbsences);

    //     // Generate sample presences
    //     $presences = [];
    //     for ($i = 1; $i <= 15; $i++) {
    //         $presences[] = [
    //             'student_id' => rand(1, 10),
    //             'date_absences_id' => rand(1, 10),
    //         ];
    //     }
    //     DB::table('presences')->insert($presences);
    // }
    }
}
