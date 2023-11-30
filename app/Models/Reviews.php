<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reviews extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_id', "product_id", "rating", "comment", "created_at"];

    public function product(): BelongsTo{
        return $this->belongsTo(Products::class);
    }

    public function user(): HasOne{
        return $this->hasOne(User::class,"id", "user_id");
    }
}
