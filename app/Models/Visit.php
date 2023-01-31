<?php

namespace App\Models;

use App\Traits\Relations\BelongsTo\BelongsToLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory, BelongsToLink;
}
