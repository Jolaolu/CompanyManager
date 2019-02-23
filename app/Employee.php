<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use SoftDeletes,Notifiable;
    protected $fillable = [
        'firstname', 'lastname', 'email', 'number', 
    ];


    public function company() 
    {

        return $this->hasOne(Company::Class);
        
    }
}
