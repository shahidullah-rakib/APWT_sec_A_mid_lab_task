<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class accountentController extends Controller
{
    public function index(){
    	return view('accountent.index');
    }
    


    
}
