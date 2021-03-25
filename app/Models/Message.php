<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    use HasFactory;

    /**
     * Model table
     *
     * @var string
     */
    protected $table        = 'messages';

    /**
     * Model primary key
     *
     * @var string
     */
    protected $primaryKey = 'message_id';

    /**
     * Properties available to mass-assignment
     *
     * @var string[]
     */
    protected $fillable = [
        'author_id',
        'message',
    ];

    /**
     * Get's author One-to-One relation
     *
     * @return HasOne
     */
    public function author()
    {
        return $this->hasOne(Author::class, 'author_id', 'author_id');
    }
}
