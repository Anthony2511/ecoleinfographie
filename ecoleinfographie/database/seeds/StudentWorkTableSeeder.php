<?php

use Illuminate\Database\Seeder;

class StudentWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get array of ids
        $studentIds = DB::table('students')->pluck('id');
        $workIds  = DB::table('works')->pluck('id');
        
        // Seed course_teacher table
        foreach ((range(1, 100)) as $index)
        {
            DB::table('student_work')->insert(
                [
                    'student_id' => $studentIds->random(),
                    'work_id' => $workIds->random()
                ]
            );
        }
    }
}
