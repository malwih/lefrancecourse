<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    use HasFactory;

    protected $table = 'course_user';

    protected $fillable = [
        'course_id',
        'user_id',
        'is_active',
        'is_completed',
    ];

    // relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // relasi ke model Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
