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
        return view('index'); 
    } 

    public function detail($id) {
        $user = DB::table('users')->where('id', $id)->first();

        return view('detail',['id' => $users->id,'name' => $users->name, 'mc' => $users->mc,'tc' => $users->tc,'hw' => $users->hw,'bs' => $users->bs,'ks' => $users->ks,'ac' => $users->ac]);
    }
}
