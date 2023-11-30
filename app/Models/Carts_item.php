<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carts_item extends Model
{
    use HasFactory;

    protected $table = 'carts_item';

    public $timestamps = false;

    protected $fillable = ["product_id", "quantity"];

    public function products(): HasMany{
        return $this->hasMany(Products::class,"id",'product_id');
    }

    public function carts(): BelongsTo{
        return $this->belongsTo(Carts::class);
    }
}
