<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Job;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->limit(6)->get();

        return view('pages.index')->with('jobs', $jobs);
    }
}
