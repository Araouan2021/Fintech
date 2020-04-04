<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller
{
    public function ShowAddMoneyForm(){
        return view('add-money');
    }

    public function addMoney(){

    Form::create(
        [
         'Loan Amount'=>'3000c', 
         'MOMO Number'=>'0243214500'
        ]
    );
    return redirect()->route('forms');
    }

    public function showForm(){
        $forms = Form::all();
        return view ('forms', compact('forms'));
        }
}

