<?php

namespace App;









use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Admin;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = 'employees';

    protected $fillable = ['name', 'idnum', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $appends = ['is_admin'];

    public function admin()
    {
        return $this->hasOne('App\Admin');
    }

    public function getIsAdminAttribute()
    {
        $isAdmin = false;

        if(Admin::where('emp_id', $this->id)->exists()) {
            $isAdmin = true;
        }

        return $this->attributes['is_admin'] = $isAdmin;
    }
}
