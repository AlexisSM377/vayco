<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    /**
     * relacione marca a su categoria
     */
    public function categoria()
    {
        return $this->hasOne(Categoria::class,'id', 'categoria_id');
    }
}
