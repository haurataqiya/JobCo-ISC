<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentoringType extends Model
{
    use HasFactory;
    protected $fillable = [
        'mtype_id',	'mtype'
    ];

    protected $table = 'mentoring_type';
    public function mentor(){
        return $this->hasMany(Mentoring::class, 'user_id', 'id');
    }
    public function user(){
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
