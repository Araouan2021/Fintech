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
    	'firstname' => request('firstname'),
        'lastname' => request('lastname'),
        'phonenumber' => request('phonenumber'),
        'farmlocation' => request('farmlocation'),
    	'loanamount' => request('loanamount'),
    	'momonumber' => request('momonumber')
        ]);

    	return redirect()->route('applications');
    }

    public function showApplications(){
    $applications = Application::all();
    return view ('applications', compact('applications'));
    }

    public function index()
    {
        return Application::all();
    }
 
    public function show(Notebook $notebook)
    {
        return $application;
    }

    public function store(Request $request)
    {
        $application = Application::create($request->all());

    }

    public function update(Request $request, Application $application)
    {
        $application->update($request->all());

    }

    public function delete(Application $application)
    {
        $application->delete();

    }
    
}
