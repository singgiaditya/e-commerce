<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Carts extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['created_by'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cartsItem(): HasMany{
        return $this->hasMany(Carts_item::class, 'cart_id');
    }
}
