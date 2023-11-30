<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;

    protected $table = "orders";

    public $timestamps = false;

    protected $fillable = ["user_id", "address", "created_at",];
    
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function orderLines(): HasMany{
        return $this->hasMany(OrderLines::class, 'order_id');
    }
}
