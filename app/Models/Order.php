<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const COMPLETED = "completed";
    const ON_WAY = "on-way";
    const START = "start";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeCompleted(Builder $query)
    {
        $query->where('status', self::COMPLETED);
    }
}
