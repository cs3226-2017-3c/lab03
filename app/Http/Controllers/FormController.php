<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Validator;

class FormController extends Controller {
  public function test() { return view('test'); }


  
   public function check(Request $request) {
    $validator = Validator::make($request->all(), [ // as simple as this
      'name' => 'required|min:3|max:10',
      'mcq' => 'required',
    ]);
    if ($validator->fails()) {
      return redirect('test') // redisplay the form
             ->withErrors($validator) // to see the error messages
             ->withInput(); // the previously entered input remains
    }
}