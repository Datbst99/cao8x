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
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('index');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PageOfCategory::class, 'category_id');
    }

    /**
     * @return string
     */
    public function htmlStatus(): string
    {
        if($this->status == self::STATUS_ACTIVE) {
            return "<span class='text-success font-weight-bold'>Hiển thị</span>";
        }

        return "<span class='text-secondary'>Tạm ẩn</span>";
    }

    public function linkEdit(): string
    {
        return route('admin.category.edit', ['id' => $this->id]);
    }

    public function linkDelete(): string
    {
        return route('admin.category.delete', ['id' => $this->id]);
    }

    public function linkConfigPage(): string
    {
        return route('admin.category.configPage', ['id' => $this->id]);
    }

    public function htmlPageConfig(): string
    {
        if($this->page()->first()) {
            return "<span class='text-success'><i class='fal fa-check-circle'></i> Đã cấu hình</span>";
        }

        return  "<span class='text-danger font-weight-bold'>Chưa cấu hình</span>";
    }
}
