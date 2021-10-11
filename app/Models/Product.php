<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //definimos los campos que queremos evitar q se llene por asignacion masiva
    protected $guarde = ['id', 'create_at', 'update_ap'];

    //relacion uno  a mucho
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relacion mucho a muchos
    public function colors(){
        return $this->hasMany(Color::class);
    }

    // relacion uno a muchos polimorfica
    public function images(){
        return $this->morphToMany(image::class, 'imageable');
    }
}
