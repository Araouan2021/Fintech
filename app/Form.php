<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['Loan Amount', 'Momo Number',];

    public function forms(){
    	return $this->belongsTo('App\Form');
    }
}
