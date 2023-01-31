<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Link;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToLink
{
    /**
     * @return BelongsTo
     */
    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class);
    }
}
