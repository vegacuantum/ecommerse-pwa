<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
 //definimos los campos que queremos evitar q se llene por asignacion masiva
    protected $guarde = ['id', 'create_at', 'update_ap'];

//relacion uno  a muchos

    public function production(){
        return $this->hasMany(production::class);
    }

//relacion de uno a muchos inversa
    public function category(){
        return $this->belongsTo(category::class);
    }

    //relacion atraves de otra relacion  atravez de

    public function products(){
        return $this->hasOneThrough(Product::class, Subcategory::class);
    }

}

