<?php

namespace App\Traits\Relations\HasMany;

use App\Models\Visit;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyVisits
{
    /**
     * @return HasMany
     */
    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
