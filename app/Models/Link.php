<?php

namespace App\Models;

use App\Traits\Relations\BelongsTo\BelongsToUser;
use App\Traits\Relations\HasMany\HasManyVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory, HasManyVisits, BelongsToUser;
}
