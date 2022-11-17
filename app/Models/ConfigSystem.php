<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ConfigSystem
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property string|null $link
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereValue($value)
 * @mixin \Eloquent
 * @property string|null $title
 * @method static \Illuminate\Database\Eloquent\Builder|ConfigSystem whereTitle($value)
 */
class ConfigSystem extends Model
{
    use HasFactory;

    protected $table = 'config_systems';

    protected $guarded = ['id'];

    const BANNER_LEFT = 'banner-left';
    const BANNER_RIGHT = 'banner-right';
    const BANNER_MODAL = 'banner-modal';
}
