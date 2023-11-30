<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderLines extends Model
{
    use HasFactory;

    protected $table = 'order_lines';

    public $timestamps = false;

    protected $fillable = ["order_id", "product_id", "quantity"];

    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'id', 'product_id');
    }

    public function order(): BelongsTo{
        return $this->belongsTo(Orders::class);
    }
}
