<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColumnVisibility extends Model
{
    use HasFactory;
    protected $table = 'column_visibility'; // Ustaw odpowiednią nazwę tabeli
    protected $fillable = [
        'user_id',
        'table_name',
        'column_index',
        'is_visible',
    ];
}
