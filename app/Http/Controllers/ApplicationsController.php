<?php

namespace App\Http\Controllers;

use\Illuminate\Http\Request;  
use App\Application;

class ApplicationsController extends Controller
{
   public function ShowAddApplicationForm(){
        return view('add-application');
    }

    public function addApplication(){

    Application::create(
        [
         'First Name'=>'John', 
         'Last Name'=>'Paul',
         'Phone Number'=>'0207678978',
         'Farm Location'=>'Aburi',
         'MOMO Number'=>'0207678978',
         'Loan Amount'=>'4000c',
        ]
    );
    return view('applications');
    }

    public function showApplication(){
        $applications = Applications::all();
        return view ('applications', compact('applications'));
        }

    public function index(){
         return Application::all();
    }

    public function show(Application $application)
    {
         return $application;
    }

   public function update(Request $request, Application $application)
    {
        $application->update($request->all());
    }

    public function delete(Application $application)
    {
        $application->delete();
    }

    public function showDetails($id){
        $application = Application::find($id);
        return view('applications-details', compact('application'));
    }
}

