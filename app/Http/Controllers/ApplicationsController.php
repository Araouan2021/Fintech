<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Application;

use\Illuminate\Http\Request;  
use\Illuminate\Http\Response;

class ApplicationsController extends Controller
{
    public function create(){  
          return view('create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required|numeric',
            'farmlocation' => 'required',
            'loanamount' => 'required|numeric',
            'momonumber' => 'required|numeric'
        ]);

        Application::create($request->all());

        return redirect('/create');
    }
    //}

    //public function store(Request $request)
    //{
        //$application = Application::create($request->all());
    //}

    //public function store(Request $request)
    //{
        //Application::create([

                   //'firstname' => $request->firstname,
                   //'lastname' => $request->lastname,
                   //'phonenumber' => $request->phonenumber,
                   //'farmlocation' => $request->farmlocation,
                   //'loanamount' => $request->loanamount,
                   //'momonumber' => $request->momonumber
        //]);

        //return redirect('/applications');
    //}
        
        //$application->firstname = request('firstname');
        //$application->lastname = request('lastname');
        //$application->phonenumber = request('phonenumber');
        //$application->farmlocation = request('farmlocation');
        //$application->loanamount = request('loanamount');
        //$application->momonumber = request()->file('momonumber')->store('public/momonumber');
       // $application->save();
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
