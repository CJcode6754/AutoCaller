<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'region_id'
    ] ;

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
