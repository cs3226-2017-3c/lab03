<?php
namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function edit($id) {
        $student = DB::table('student')->where('id', $id)->get();
        if ($student->isEmpty()){
            return view('404');
        } else {
            return view('edit',['student' => $student->first()]);
        }        
    } 

    public function store(Request $request) {
	
    }      
}
