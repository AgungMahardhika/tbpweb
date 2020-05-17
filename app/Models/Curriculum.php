<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $guarded = [];
    
    const validation_rules = [
        'name' => 'required',
        'department_id' => 'required',
    ];
    public function departement()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
