<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function listCourses() {
        $course = \DB::table('courses')->get();

        return view('courses.courses', [
            'courses' => $course
            ]);
    }

    public function create() {
        return view('courses.create');
    }

    public function newCourse(Request $request)
    {
        $courses = new Courses();

        $courses->sectionName = request('sectionName');
        $courses->term = request('term');
        $courses->location = request('location');
        $courses->info = request('info');
        $courses->faculty = request('faculty');
        $courses->comments = request('comments');
        $courses->available = request('available');
        $courses->capacity = request('capacity');
        $courses->waitList = request('waitList');
        $courses->save();

        return $this->listCourses();
    }

    public function store(Request $request) {
        $filename = $request->file('bulkData')->getClientOriginalName();
        $file = $request->file('bulkData')->storeAs('courses', $filename);
        $fileLocation = storage_path('app/courses/fall2020csc.xlsx');

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($fileLocation);

        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();

        foreach ($rows as $row){
            $courses = new Courses();
            $courses->sectionName = $row[2];
            $courses->term = $row[0];
            $courses->location = $row[3];
            $courses->info = $row[4];
            $courses->faculty = $row[5];
            $courses->comments = $row[10];
            $courses->available = $row[6];
            $courses->capacity = $row[7];
            $courses->waitList = $row[8];

            $courses->save();
        }
        return $this->listCourses();
    }

    public function show($id) {
        $courses = Courses::find($id);

        return view('courses.view', ['courses' => $courses]);
    }

    public function edit($id) {

        $course = Courses::find($id);

        return view('courses.edit', compact('course'));
    }

    public function update($id) {

        $course = Courses::find($id);

        $course->sectionName = request('sectionName');
        $course->term = request('term');
        $course->location = request('location');
        $course->info = request('info');
        $course->faculty = request('faculty');
        $course->comments = request('comments');
        $course->available = request('available');
        $course->capacity = request('capacity');
        $course->waitList = request('waitList');

        $course->save();

        return redirect('/courses/' . $course->id);

    }

    public function delete($id) {


        \DB::table('courses')->where('id', $id)->delete();
        $courses = \DB::table('courses')->get();

        return redirect('/courses');
    }

}

