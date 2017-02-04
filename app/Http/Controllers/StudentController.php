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
        $student = DB::table('student')->get();
        return view('index', ['student' => $student]); 
    } 

    public function detail($id) {
        $student = DB::table('student')->where('id', $id)->first();

        $mc = $student->mc;
        $tc = $student->tc;
        $hw = $student->hw;
        $bs = $student->bs;
        $ks = $student->ks;
        $ac = $student->ac;
        $spe= $mc + $tc;
        $dil= $hw + $bs + $ks + $ac;
        $sum= $spe + $dil;

        return view('detail',['id' => $student->id,'name' => $student->name, 'mc' => $mc,'tc' => $tc,'hw' => $hw,'bs' => $bs,'ks' => $ks,'ac' => $ac, 'spe'=> $spe, 'dil'=>$dil, 'sum'=>$sum]);
    }
}
