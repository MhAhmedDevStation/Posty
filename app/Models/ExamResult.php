<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;
    protected $fillable = ['student_name', 'exam_name','points'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
