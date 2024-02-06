<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;


    public function students()
    {
        return $this->belongsToMany(Students::class, 'students_schools','schools_id','students_id');
    }
}
