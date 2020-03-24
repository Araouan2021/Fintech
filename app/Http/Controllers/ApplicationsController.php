<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationsController extends Controller
{
    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
        $application = Application::create($request->all());
    }

    public function index()
    {
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
