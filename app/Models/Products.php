<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "picture",
        "description",
        "category",
        "price",
        "quantity",
    ];

    public function cartsItem(): BelongsTo{
        return $this->belongsTo(Carts_item::class);
    }

    public function orderLines(): BelongsTo{
        return $this->belongsTo(OrderLines::class);
    }

    public function reviews(): HasMany{
        return $this->hasMany(Reviews::class, "product_id");
    }
}
