<?php

namespace App\Traits\Relations\HasManyThrough;

use App\Models\Link;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

trait HasManyThroughVisitsLink
{


    /**
     * @return HasManyThrough
     */
    public function visits(): HasManyThrough
    {
        return $this->hasManyThrough(Visit::class, Link::class);
    }
}
