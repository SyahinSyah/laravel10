<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    //protected $table "schools"; --> to rename the table 
    //protected $primaryKey = "isbn_no"; --> set the id name dff from the default
    //public $incrementing = false; --> set the auto increment to false; 

    protected $fillable = ['name','address1','address2','address3','email'];

    public function students()
    {
        return $this->belongsToMany(Students::class, 'students_schools','schools_id','students_id');
    }
}
