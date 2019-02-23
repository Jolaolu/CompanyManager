<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Databse\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use SoftDeletes, Notifiable;
    protected $fillable = [

    'name', 'email', 'thumbnail', 'website'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
