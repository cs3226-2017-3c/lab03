<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showId($id)
    {
		$data['id'] = $id;
        return View::make('simple', $data);
    }
}
