<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Models\Course::class, 50)->create()->each(function ($u){
            $u->save(factory(App\Models\Course::class)->make());
        });*/
        factory('App\Models\Course', 1)->create();
    }
}
