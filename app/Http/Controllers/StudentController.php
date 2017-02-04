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
    public function index() { 
        return view('index'); 
    } 

    public function detail($id) {
        require_once '/var/www/html/cs3226/vendor/autoload.php';


        $faker = Faker\Factory::create();

        $limit = 50;

        $detail = array();

        for ($i = 0; $i < $limit; $i++) {
            $score = array();
            for ($i=0; $i < 6; $i++) {
              $score []= $faker->randomDigit;
            }

            $detail[(string)($i+1)]= array("name"=>$faker->unique()->name, "score"=>$score);
        }

        $mc = $detail[$id]['score'][0];
        $tc = $detail[$id]['score'][1];
        $hw = $detail[$id]['score'][2];
        $bs = $detail[$id]['score'][3];
        $ks = $detail[$id]['score'][4];
        $ac = $detail[$id]['score'][5];
        $spe = $mc + $tc;
        $dil = $hw + $bs + $ks + $ac;
        $sum = $spe + $dil;

        return view('detail',['name' => $detail[$id]['name'], 'mc' => $mc,'tc' => $tc,'hw' => $hw,'bs' => $bs,'ks' => $ks,'ac' => $ac,'spe' => $spe,'dil' => $dil, 'sum' => $sum]);
    }
}
