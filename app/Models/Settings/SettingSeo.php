<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products\Product;
use App\Models\Products\Category;


class SettingSeo extends Model
{
    protected $table = 'settings_seo';
    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'robots',
        'og_title',
        'og_description',
        'og_image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'setting_seo_id');
    }
}
