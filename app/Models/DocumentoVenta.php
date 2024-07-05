<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoVenta extends Model
{
    use HasFactory;

    protected $table = 'documento_ventas';
    protected $primaryKey = 'idDocumento';
    protected $fillable = ['nombreDocumento', 'descripcionDocumento'];
}