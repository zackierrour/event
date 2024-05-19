<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $events = Evenement::where('nbre_place', '>', 0)->get();        
        return view('welcome',compact('events'));
    }
}
