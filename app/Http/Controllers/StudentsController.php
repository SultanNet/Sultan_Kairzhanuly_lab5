<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function operation($number1){
    	switch ($id) {
    		case '0':
    			view ('kair');
    			break;

    		case '1':
    			view ('num');
    			break;

    		case '2':
    			view ('sula');
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
