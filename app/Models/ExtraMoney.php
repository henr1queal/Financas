<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExtraMoney extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the ExtraMoney
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }
}
