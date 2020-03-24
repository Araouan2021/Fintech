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

    public function store()
    {
        $application = new Application;
        
        $game->title = request('title');
        $game->publisher = request('publisher');
        $game->releasedate = request('releasedate');
        $game->image = request()->file('image')->store('public/images');
        $game->save();
    }
}
