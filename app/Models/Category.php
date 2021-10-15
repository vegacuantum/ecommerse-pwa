<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'slug',
    'image',
    'icon',
];

// uno a muchos hasMany
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relacion muchos a muchos belongsToMany
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    // relacion atravez de
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
