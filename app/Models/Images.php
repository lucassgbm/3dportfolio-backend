<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use SoftDeletes;

    protected $table = 'images';

    protected $fillable = [
        'name',
        'image_path',
        'portfolio_id',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
