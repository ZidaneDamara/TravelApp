<?php

namespace App\Models;

use App\Models\Category;
use App\Models\PackagePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageTour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',     
        'thumbnail',
        'about',
        'location',
        'price',
        'days',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function package_photos(){
        return $this->hasMany(PackagePhoto::class);
    }
}