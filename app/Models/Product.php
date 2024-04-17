<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function monthly_fair(): BelongsToMany
    {
        return $this->belongsToMany(MonthlyFair::class, 'monthly_fairs_products');
    }
}
