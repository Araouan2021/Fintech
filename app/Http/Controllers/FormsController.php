<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller
{
    public function ShowSaveMoneyForm(){
        return view('save-money');
    }

    public function saveMoney(){

    Form::create(
        [
         'Loan Amount'=>'2000c', 
         'MOMO Number'=>'0208907890',
        ]
    );
    return redirect()->route('forms');
    }

    public function showForm(){
        $forms = Form::all();
        return view ('forms', compact('forms'));
        }
}

