<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscussionTopic extends Model
{
    use HasFactory;
    protected $fillable = [
        'disc_id',
        'field_id'
    ];
}
