<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlannerController extends Controller
{
public function planner() {
    return view('app\planner');
}
}
