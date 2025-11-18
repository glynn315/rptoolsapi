<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorNodes extends Model
{
    protected $table = 'color_nodes';
    protected $fillable = [
        'diagram_id',
        'label',
        'color_key',
        'color_code',
        'is_active',
        'created_by',
        'created_date',
    ];
}
