<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'mentoring_id',	
        'mtype_id',	
        'field_id',	
        'mentor_id',	
        'user_id',	
        'price',	
        'rating',	
        'schedule',
    ];

    protected $table = 'mentoring';
    public function mentoring_type(){
        return $this->belongsTo(MentoringType::class, 'mtype_id', 'id');
    }
    public function field(){
        return $this->belongsTo(FieldWork::class, 'field_id', 'id');
    }
    public function mentor(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
