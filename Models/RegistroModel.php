<?php
namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'registro';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'compania', 'correo_electronico', 'contrasena', 'confirmacion_contrasena'];

public function buscarUsuario($correo_electronico, $contrasena)
{
    $query = $this->where('correo_electronico', $correo_electronico)
                  ->limit(1)
                  ->get();

    $usuario = $query->getRow();

    if ($usuario && password_verify($contrasena, $usuario->contrasena)) {
        return $usuario;
    } else {
        return false;
    }
}
}


