<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\SettingSeo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    /**
     * The table associated with the model.
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'desc',
        'status',
        'cat_id',
        'ean_id',
        'params_id',
        'stock_id',
        'price_netto',
        'price_brutto',
        'vat',
    ];


    /**
     * Relacje z innymi tabelami.
     */

    // Powiązanie z kategorią produktu
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function ean()
    {
        return $this->belongsTo(ProductEan::class, 'ean_id');
    }
    public function params()
    {
        return $this->belongsTo(ProductParam::class, 'params_id');
    }
    public function stock()
    {
        return $this->belongsTo(ProductStock::class, 'stock_id');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function settingSeo()
    {
        return $this->hasOne(SettingSeo::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_photo')->useDisk('media');
        $this->addMediaCollection('other_photos ')->useDisk('media');
    }
}
