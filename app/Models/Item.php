<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Item extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug', 'type', 'category', 'weight', 'cost', 'damage_dice'];


    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
