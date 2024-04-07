<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Orders extends Model
{
    use HasFactory;
    protected $fillable =[
        "id_user",
        "id_product",
        "total",
        "Quantite",
        
    ];
    public function User() :BelongsToMany
    {
        return $this->belongsToMany(User::class);  
    }
    public function Products() :BelongsToMany
    {
        return $this->belongsToMany(Products::class);
    }
}
