<?php

namespace App\Models;

use CodeIgniter\Model;

class VuelosModel extends Model
{
    protected $table = 'Vuelos';
    protected $primaryKey = 'IDVuelo';
    protected $allowedFields = ['Aerolinea', 'HoraDespeje', 'HoraAterrizaje', 'Precio'];
}
