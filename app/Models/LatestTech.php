<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LatestTech extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
        'slug',
        'image',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($latestTech) {
            $latestTech->slug = Str::slug($latestTech->title);
        });

        static::updating(function ($latestTech) {
            $latestTech->slug = Str::slug($latestTech->title);
        });
    }
}
