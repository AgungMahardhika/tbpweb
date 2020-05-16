<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    const validation_rules = [
        'name' => 'required',
        'faculty_id' => 'required',
    ];

    protected $table = 'departments';

    protected $guarded = [];
}
