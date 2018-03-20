<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    



    protected $table = 'admin';

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'emp_id');
    }
}
