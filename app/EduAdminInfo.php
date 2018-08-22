<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduAdminInfo extends Model
{
    protected $table = 'edu_admin_infos';

    protected $primaryKey = 'student_id';
    protected $fillable = ['name', 'class', 'secondary_college', 'teacher', 'teacher_tel'];
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
