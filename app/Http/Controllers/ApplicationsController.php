<?php

namespace App\Http\Controllers;

use\Illuminate\Http\Request;  
use App\Application;

class ApplicationsController extends Controller
{
   public function ShowAttachApplicationForm(){
        return view('attach-application');
    }


    public function save(Request $request){
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phonenumber = $request->phonenumber;
        $farmlocation = $request->farmlocation;
        $momonumber = $request->momonumber;
        $loanamount = $request->loanamount;
        Application::create(['firstname'=>$firstname, 'lastname'=>$lastname, 'phonenumber'=>$phonenumber, 'farmlocation'=>$farmlocation, 'momonumber'=>$momonumber, 'loanamount'=>$loanamount]);

        return redirect()->route('applications');
    }

    public function showApplications(){
        $applications = Application::all();
        return view ('applications');
        }

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

