<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    /**
     * relacione proveedor a su direccion
     */
    public function direccion()
    {
        return $this->hasOne(Direccion::class,'id', 'direccion_id');
    }
}
