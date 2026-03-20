<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function index(){
	$characters = DB::table('characters')->get();

	return view('welcome', ['characters' => $characters]);
}
}
