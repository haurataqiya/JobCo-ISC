<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionReply extends Model
{
    use HasFactory;
    protected $fillable = [
        'disc_rep_id',    
        'disc_id',    
        'user_id',    
        'disc_reply',    
        'helping_status'
    ];

    protected $table = 'discussion_replies';
    public function discussion_topic(){
        return $this->belongsTo(DiscussionTopic::class, 'disc_id', 'id');
    }
    public function users(){
        return $this->belongsTo(DiscussionTopic::class, 'disc_id', 'id');
    }
}
