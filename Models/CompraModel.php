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
	'TipoTarjeta',
        'TarjetaCredito',
        'Mes',
        'Anio',
        'NombreTarjeta'
    ];

    public function getCompraVuelo($IDVuelo) {
    $builder = $this->db->table('Compra');
    $builder->where('IDVuelo', $IDVuelo);
    $query = $builder->get();
    return $query->getRowArray();
}
 	public function getRecibo($IDVuelo) {
        	$builder = $this->db->table('Compra');
        	$builder->select('*');
        	$builder->join('Vuelos', 'Vuelos.IDVuelo = Compra.IDVuelo');
        	$builder->where('Compra.IDVuelo', $IDVuelo);
        	$query = $builder->get();
        	return $query->getRowArray();
    }
}
