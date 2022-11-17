<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PageOfCategory
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $path_background
 * @property string $content
 * @property string|null $seo_title
 * @property string|null $seo_keywords
 * @property string|null $seo_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory wherePathBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageOfCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PageOfCategory extends Model
{
    use HasFactory;

    protected $table = 'page_of_categories';

    protected $guarded = ['id'];
}
