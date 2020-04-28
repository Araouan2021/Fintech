<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function ShowAddMoneyForm(){
        return view('add-money');
    }

    public function addMoney(Request $request){
        Form::create([
        'loanamount' => request('loanamount'),
        'momonumber' => request('momonumber')
        ]);

        return redirect()->route('forms');
    }

    public function store(Request $request)
    {

        $form = new Form;

        $form->loanamount = $request->loanamount;
        $form->momonumber = $request->momonumber;

        $form->save();
    }

    public function showForms(){
        $forms = Form::all();
        return view ('forms', compact('forms'));
        }

    public function index(){
         return Form::all();
    }

    public function show(Form $form)
    {
         return $form;
    }

}

