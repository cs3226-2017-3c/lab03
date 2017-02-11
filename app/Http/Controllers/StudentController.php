<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $students = DB::table('student')->get()->sortByDesc(function ($a, $key) {
            return  $a->mc+$a->tc+$a->hw+$a->bs+$a->ks+$a->ac ;
        });
        return view('index', ['student' => $students]); 
    } 

    public function detail($id) {
        $student = DB::table('student')->where('id', $id)->get();
        if ($student->isEmpty()){
            return view('404');
        } else {
            return view('detail',['student' => $student->first()]);
        }
    }

    public function upload($id) {
        $student = DB::table('student')->where('id', $id)->get();
        if ($student->isEmpty()){
            return view('404');
        } else {
            return view('upload',['student' => $student->first()]);
        }
    }    

    public function upload_image(Request $request) {
        $path = $request->file('avatar')->store("public/avatar");
        $id = $request->input('id');
        $student = DB::table('student')->where('id', $id)->get();
        if ($student->isEmpty()){
            return view('404');
        } else {
            DB::table('student')
                ->where('id', $id)
                ->update(['avatar' => $path]); 
            return redirect()->action('StudentController@detail',['id' => $id])
        }
    }      
}
