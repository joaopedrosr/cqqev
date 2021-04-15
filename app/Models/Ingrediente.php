<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    
    public function getRouteKeyName(){
        return "slug";
    }

    public function user(){
        return $this->belongsTo(User::class);

    }

    //relacion muchos a muchos

    public function receitas(){
        return $this->belongsToMany(Receita::class);
    }

}





