<?php

use Illuminate\Database\Seeder;

class CourseTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get array of ids
        $teacherIds = DB::table('teachers')->pluck('id');
        $courseIds  = DB::table('courses')->pluck('id');
        
        // Seed course_teacher table
        foreach ((range(1, 60)) as $index)
        {
            DB::table('course_teacher')->insert(
                [
                    'teacher_id' => $teacherIds->random(),
                    'course_id' => $courseIds->random()
                ]
            );
        }
    }
}
