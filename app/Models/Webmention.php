<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $mention_id
 * @property string $source_url
 * @property string $target_url
 * @property string $storage_path
 */
class Webmention extends Model
{
    use HasFactory;
}
