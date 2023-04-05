namespace App\Models;

use CodeIgniter\Model;

class ConfirmacionModel extends Model
{
    protected $table = 'Compra';
    protected $primaryKey = 'IDCompra';

    protected $allowedFields = [
        'Compra.IDVuelo',
        'Compra.Nombre',
        'Compra.Direccion',
        'Compra.Ciudad',
        'Compra.Estado',
        'Compra.CP',
        'Compra.TipoTarjeta',
        'Compra.TarjetaCredito',
        'Compra.Mes',
        'Compra.Anio',
        'Compra.NombreTarjeta',
        'Vuelos.Aerolinea',
        'Vuelos.HoraDespeje',
        'Vuelos.HoraAterrizaje',
        'Vuelos.PaisOrigen',
        'Vuelos.PaisDesino',
        'Vuelos.Precio'
    ];

    public function getCompraVuelo($idvuelo)
    {
        return $this->select($this->allowedFields)
            ->where(['IDVuelo' => $idVuelo])
            ->join('Vuelos', 'Vuelos.IDVuelo = Compra.IDVuelo')
            ->first();
    }
}

