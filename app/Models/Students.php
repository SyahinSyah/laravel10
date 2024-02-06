<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    public function schools()
    {
        return $this->belongsToMany(Schools::class, 'students_schools','students_id','schools_id');
    }

}
