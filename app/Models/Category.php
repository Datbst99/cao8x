<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property int $index
 * @property int $status
 * @property int $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'categories';

    protected $guarded = ['id'];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0; // ko hoạt động

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('index');
    }

    public function htmlStatus()
    {
        if($this->status == self::STATUS_ACTIVE) {
            return "<span class='text-success font-weight-bold'>Hiển thị</span>";
        }

        return "<span class='text-secondary'>Tạm ẩn</span>";
    }

    public function linkEdit()
    {
        return route('admin.category.edit', ['id' => $this->id]);
    }
    public function linkDelete()
    {
        return route('admin.category.delete', ['id' => $this->id]);
    }
}
