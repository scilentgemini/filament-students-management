<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'section_id',
        'name',
        'email',
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); // ✅ Fixed foreign key
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id'); // ✅ Explicitly defining foreign key
    }
}
