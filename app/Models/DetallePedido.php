<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'idDetallePedido';
    protected $fillable = ['idPedido', 'idProducto', 'idDocumento', 'cantidad', 'precioUnitario', 'importe'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'idPedido');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }
    public function documento()
    {
        return $this->belongsTo(DocumentoVenta::class, 'idDocumento');
    }
}