<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Author
 * @package App\Models
 */
class Author extends Model
{
    use HasFactory;

    /**
     * Model table
     *
     * @var string
     */
    protected $table        = 'authors';

    /**
     * Model primary key
     *
     * @var string
     */
    protected $primaryKey   = 'author_id';

    /**
     * Messages belonging to author
     *
     * @return BelongsToMany
     */
    public function messages()
    {
        return $this->belongsToMany(Message::class);
    }
}
