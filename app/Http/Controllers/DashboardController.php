<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
    	$title = "Eye Examination";
    	$patients = Patient::count();
    	$users = User::count();
    	return view('Dashboard.welcome', compact('title', 'patients', 'users'));
    }

}
