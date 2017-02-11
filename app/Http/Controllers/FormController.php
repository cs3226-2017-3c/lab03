<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller {
  public function test() { return view('test'); }

  public function check(Request $request) {
    // ps, yeah, I 'cheat' by combining Controller and View together...
    // separate them in your actual project
    $name = $request->input('name');
    $ans = $request->input('mcq');
    return "<p>" . $name . ", you selected: " . $ans . "<br>" . 
           "Correct: " . ($ans == 10 ? "Y" : "N") . "<br></p>";
  }
}