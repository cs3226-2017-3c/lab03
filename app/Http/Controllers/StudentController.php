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
        $user = DB::table('users')->where('id', (int)$id)->first();

        return view('detail',['id' => $user->id,'name' => $user->name, 'mc' => $user->mc,'tc' => $user->tc,'hw' => $user->hw,'bs' => $user->bs,'ks' => $user->ks,'ac' => $user->ac]);
    }
}
