<?php

namespace App\Http\Controllers;

use App\Charts\StudentCount;

use Illuminate\Http\Request;

class StudentCountController extends Controller
{

    public function index()
    {
        $usersChart = new StudentCount();
//        $usersChart->labels(['Jan', 'Feb', 'Mar']);
//        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13]);
//        return view('charts', [ 'usersChart' => $usersChart ] );
        $course = \DB::table('courses')->pluck('sectionName');
        $avail = \DB::table('courses')->pluck('available');

        $usersChart->title('Available Slots');
        $usersChart->labels($course);
        $usersChart->dataset('Available Slots', 'bar', $avail);
        $usersChart->height(600);
        return view('charts', [
            'usersChart' => $usersChart
            ]);
    }

    public function waitListed()
    {
        $usersChart = new StudentCount();
        $course = \DB::table('courses')->pluck('sectionName');
        $wait = \DB::table('courses')->pluck('waitList');

        $usersChart->title('Amount Waitlisted');
        $usersChart->labels($course);
        $usersChart->dataset('Wait Listed Amount', 'bar', $wait);
        $usersChart->height(600);
        return view('charts', [
            'usersChart' => $usersChart
        ]);

    }

    public function capacity()
    {
        $usersChart = new StudentCount();
        $course = \DB::table('courses')->pluck('sectionName');
        $cap = \DB::table('courses')->pluck('capacity');

        $usersChart->title('Maximum Capacity');
        $usersChart->labels($course);
        $usersChart->dataset('Maximum Slots', 'bar', $cap);
        $usersChart->height(600);
        return view('charts', [
            'usersChart' => $usersChart
        ]);

    }

    public function enrolled()
    {
        $usersChart = new StudentCount();
        $course = \DB::table('courses')->pluck('sectionName');
        //$cap = \DB::select(\DB::Raw("select capacity-available from courses"));
        $cap = \DB::table('courses')->pluck('capacity')->all();
        $avail = \DB::table('courses')->pluck('available')->all();
        $enrolled = array();
        for ($i=0; $i < count($cap); $i++) {
            $amt = $cap[$i] - $avail[$i];
            array_push($enrolled, $amt);
        }

        $usersChart->title('Amount Enrolled');
        $usersChart->labels($course);
        $usersChart->dataset('Maximum Slots', 'bar', $enrolled);
        $usersChart->height(600);


        return view('charts', [
            'usersChart' => $usersChart
        ]);
    }

}
