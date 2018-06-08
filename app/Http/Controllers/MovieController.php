<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


/**
*
*/

class MovieController extends Controller{

	function __construct(){

	}

	public function index(){
        return 'Welcome to My Movie';
    }

    public function viewMovie(){
        return 'viewMovie';
    }

}