<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller
{
    public function ShowAddMoneyForm(){
        return view('add-money');
    }

    public function addMoney(Request $request){
    Form::create([
        'Loan Amount' => request('Loan Amount')->,
        'MOMO Number' => request('MOMO Number'),
        ]);

        return redirect()->route('forms');
    }

    //public function addMoney(){

        //Form::create(
            //[
             //'loanamount'=>'1200c',
             //'momonumber'=>'0242345676'
            //]
          //);         
          //return view('add-money');
    //}

    public function showForm(){
        $forms = Form::all();
        return view ('forms', compact('forms'));
        }

}

