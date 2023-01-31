<?php

namespace App\Traits\Relations\HasMany;

use App\Models\Link;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasManyLinks
{
    /**
     * @return HasMany
     */
    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}
