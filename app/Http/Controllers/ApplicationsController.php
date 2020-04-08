<?php

namespace App\Http\Controllers;

use\Illuminate\Http\Request;  
use App\Application;

class ApplicationsController extends Controller
{
   public function ShowAddApplicationForm(){
        return view('add-application');
    }


    public function addApplication(Request $request){
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phonenumber = $request->phonenumber;
        $farmlocation = $request->farmlocation;
        $momonumber = $request->momonumber;
        $loanamount = $request->loanamount;
        Application::create(['firstname'=>'firstname', 'lastname'=>'lastname', 'phonenumber'=>'phonenumber', 'farmlocation'=>'farmlocation', 'momonumber'=>'momonumber', 'loanamount'=>'loanamount']);
        return redirect()->route('applications');
    }

    public function showApplications(){
        $applications = Applications::all();
        return view ('applications', compact('applications'));
        }

    //public function saveApplication(Request $request){
        //$firstname = $request->firstname;
        //$lastname = $request->lastname;

        //$application = Application::find($id);
        //$application->application()->create(['firstname'=>$firstname, 'lastname'=>$lastname]);

        //return redirect()->route('applications');
    //}

    //public function showDetails($id){
        //$application = Application::find($id);
        //return view ('applications-details', compact('application'));
    //}

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
}

