<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $webmention_id
 * @property string $path
 * @property Webmention $webmention
 */
class WebmentionStore extends Model
{
    use HasFactory;

    public function webmention(): BelongsTo
    {
        return $this->belongsTo(Webmention::class);
    }
}
