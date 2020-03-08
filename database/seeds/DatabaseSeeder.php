<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Dummy email
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@au.edu',
            'password' => '$2y$10$r/4q9NolT5YUM3eviTVizeMCiwXoUEN3x4tWVc7/8b/O.nWNkWhT.',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@au.edu',
            'password' => '$2y$10$r/4q9NolT5YUM3eviTVizeMCiwXoUEN3x4tWVc7/8b/O.nWNkWhT.',
            'type' => 'admin',
        ]);

        //Course Info Seeder
        $courseName = array("CSC-1010-02(70465) Intro to Computer Science", "CSC-1700-01(70466) Introduction to Computer Prog",
            "CSC-2200-01(70468) Web Application Development", "CSC-2300-01(70470) Computer Architecture");
        $courseInfo = array("08/24/2020-12/05/2020 Lecture Monday, Wednesday 03:55PM - 5:40PM, Dunham Hall, Room 019",
            "08/24/2020-12/05/2020 Lecture Monday, Wednesday 03:55PM - 5:40PM, Dunham Hall, Room 019",
            "08/24/2020-12/05/2020 Lecture Monday, Wednesday 01:15PM - 02:20PM, Stephens Hall, Room 103",
            "08/24/2020-12/05/2020 Lecture Monday, Wednesday, Friday 08:00AM - 09:05AM, Dunham Hall, Room 102");
        $courseComments = array("Course Types: 2016 Scienti/Quant Reason/2017", "PRE-REQS: Concurrent enrollment in or previous
        completion of MTH-1100 or higher", "PRE-REQS: CSC-1700", "PRE-REQS: CSC-1700");
        $countOfCourses = count($courseName);

        foreach (range(0, $countOfCourses -1) as $index) {
            $createdAt = date("Y-m-d H:i:s");
            DB::table('courses')->insert([
                'sectionName' => $courseName[$index],
                'term' => "Fall Semester 2020",
                'location' => "Aurora Main Campus",
                'info' => $courseInfo[$index],
                'faculty' => "TBA",
                'comments' => $courseComments[$index],
                'available' => rand(1,30),
                'capacity' => rand(1,40),
                'waitList' => rand(1,5),
                'created_at' => $createdAt,
                'updated_at' => $createdAt,
            ]);
    }


    }
}
