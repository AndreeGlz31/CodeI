<?php

namespace App\Models;

use CodeIgniter\Model;

class CompraModel extends Model
{
    protected $table = 'Compra';
    protected $primaryKey = 'IDCompra';

    protected $allowedFields = [
        'IDVuelo',
        'Nombre',
        'Direccion',
        'Ciudad',
        'Estado',
        'CP',
        'TarjetaCredito',
        'MES',
        'ANIO',
        'NombreTarjeta'
    ];

    // Aquí podrías definir otros métodos para personalizar el comportamiento del modelo
}
