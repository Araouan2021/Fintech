<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;


class FormController extends Controller
{
    public function ShowAddMoneyForm(){
        return view('add-money');
    }

    public function addMoney(Request $request){
    	Form::create([
    	'loan amount' => request('loan amount'),
    	'momo number' => request('momo number')
    	]);

    	return redirect()->route('forms');
    }

    public function showForms(){
    $forms = Form::all();
    return view ('forms', compact('forms'));
    }
}
