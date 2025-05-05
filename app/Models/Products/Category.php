<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\SettingSeo;

class Category extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = [
        'cat_name',
        'description',
        'parent_id',
        'setting_seo_id'
    ];

    // Relacja: Kategoria może mieć jeden nadrzędny element (rodzica)
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Relacja: Kategoria może mieć wiele podkategorii (dzieci)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function settingSeo()
    {
        return $this->belongsTo(SettingSeo::class, 'setting_seo_id');
    }
}
