<?php

namespace App\Models;

use CodeIgniter\Model;

class VuelosModel extends Model
{
    protected $table = 'Vuelos';
    protected $primaryKey = 'IDVuelo';
    protected $allowedFields = ['Aerolinea', 'HoraDespeje', 'HoraAterrizaje','PaisOrigen','PaisDesino', 'Precio'];

public function getVuelos($depature, $dest)
{
    $builder = $this->db->table('Vuelos');
    $builder->where('PaisOrigen', $depature);
    $builder->where('PaisDestino', $dest);
    $query = $builder->get();
    return $query->getResultArray();
}
}


