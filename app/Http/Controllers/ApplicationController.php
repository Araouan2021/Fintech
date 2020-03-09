<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    public function ShowAddApplicationForm(){
    	return view('add-application');
    }

    public function addApplication(Request $request){
    	Application::create([
        'First Name' => request('First Name'),
    	'Last Name' => request('Last Name'),
    	'Phone Number' => request('Phone Number'),
    	'Farm Location' => request('Farm Location'),
    	'Loan Amount' => request('Loan Amount'),
    	'MOMO number' => request('MOMO number')
    	]);

    	return redirect()->route('applications');
    }

    public function showApplications(){
    $applications = Application::all();
    return view ('applications', compact('applications'));
    }
}
