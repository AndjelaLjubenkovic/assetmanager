<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_id',
        'first_name',
        'last_name'
    ];
    protected $casts = [
        'employee_id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
    ];
    
}





