<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_completo','ruc','direccion','telefono','correo'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
