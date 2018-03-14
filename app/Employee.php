<?php

namespace App;









use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = 'employees';

    protected $fillable = ['name', 'idnum', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
