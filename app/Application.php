<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['First Name', 'Last Name', 'Phone Number', 'Farm Location', 'Loan Amount', 'MOMO number'];

    public function applications(){
    	return $this->hasMany('App\Application');
    }
}
