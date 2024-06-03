<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Character;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'slug'];

    /**
     * Get all of the comments for the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }
}
