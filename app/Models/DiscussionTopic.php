<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'disc_id',
        'user_id',
        'field_id',
        'disc_title',	
        'disc_desc'	
    ];

    protected $table = 'discussion_topic';
    public function discussion_reply(){
        return $this->hasMany(DiscussionReply::class, 'disc_rep_id', 'id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
