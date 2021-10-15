<?php

namespace App\Models;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //realacin uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relacion muchos a muchos
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
