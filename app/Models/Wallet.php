<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wallet extends Model
{
    protected $fillable = [
        'balance'
    ];

    /**
     * The roles that belong to the Wallet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(ExtraMoney::class);
    }

    public function extra_money(): HasMany
    {
        return $this->hasMany(ExtraMoney::class);
    }
    
    public function salaries(): HasMany
    {
        return $this->hasMany(Salary::class);
    }
}
