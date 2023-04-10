<?php
namespace App\Models;

use CodeIgniter\Model;

class RegistroModel extends Model
{
    protected $table = 'registro';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'compania', 'correo_electronico', 'contrasena', 'confirmacion_contrasena'];
}
