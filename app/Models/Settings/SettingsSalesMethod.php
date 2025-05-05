<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsSalesMethod extends Model
{
    use HasFactory;
    protected $table = 'settings_sales_method';
    protected $fillable = ['name'];
}
