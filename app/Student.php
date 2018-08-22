<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'student_id';
    protected $fillable = ['password'];
    public $timestamps = true;
    public function getDateFormat()
    {
        return time();
    }
    public function asDateTime($value)
    {
        return $value;
    }
}
