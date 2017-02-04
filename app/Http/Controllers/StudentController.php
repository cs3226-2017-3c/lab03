<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index() { 
        $students = DB::table('student')->get();
        usort($students, function($a, $b)
        {
            return $a->mc+$a->tc+$a->hw+$a->bs+$a->ks+$a->ac < $b->mc+$b->tc+$b->hw+$b->bs+$b->ks+$b->ac;
        });
        return view('index', ['student' => $students]); 
    } 

    public function detail($id) {
        $student = DB::table('student')->where('id', $id)->first();
        return view('detail',['student' => $student]);
    }
}
