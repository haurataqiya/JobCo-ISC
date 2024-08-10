<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',	
        'field_id',	
        'mentor_id',
        'class_name',
        'price',
        'rating'
    ];

    protected $table = 'class_course';
    public function fieldwork(){
        return $this->belongsTo(FieldWork::class, 'field_id', 'id');
    }
    public function mentor(){
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
