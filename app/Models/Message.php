<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $primaryKey = 'message_id';

    protected $fillable = [
        'author_id',
        'message',
    ];

    public function author()
    {
        return $this->hasOne(Author::class, 'author_id', 'author_id');
    }
}
