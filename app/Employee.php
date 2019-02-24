<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use SoftDeletes,No4tifiable;
    protected $fillable = [
        'firstname', 'lastname', 'email', 'number',
    ];


    public function company()
    {

        return $this->belongsTo(Company::class, 'Comapny_id');


    }
}
