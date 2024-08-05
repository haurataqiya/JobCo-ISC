<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'field_id',
        'field_name'
    ];

    protected $table = 'field_work';
    public function class(){
        return $this->hasMany(ClassCourse::class, 'class_id', 'id');
    }
    public function form_diskusi(){
        return $this->hasMany(DiscussionTopic::class, 'disc_id', 'id');
    }
    public function mentoring(){
        return $this->hasMany(Mentoring::class, 'mentoring_id', 'id');
    }
}
