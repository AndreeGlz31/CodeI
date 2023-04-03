<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\VuelosModel;
use App\Models\CompraModel;

class Home extends BaseController
{
    public function index()
    {
        return view('templates/header')
		.view('index')
		.view('templates/footer');
    }
   public function vacaciones(){
	return  view('templates/header')
		.view('templates/Vacaciones')
		.view('templates/footer');
    }
   public function login(){
	return	view('templates/navbar')
		.view('templates/login')
		.view('templates/footer');
    }
   public function registro(){
	return	view('templates/navbar')
		.view('templates/registro')
		.view('templates/footer');
	}
	public function reservar(){
	if($this->request->getMethod()==='post'){
		$model = new VuelosModel();
		$vuelos = $model->getVuelos($this->request->getPost('depature'),$this->request->getPost('Dest'));
	}
        $data['vuelos'] = $vuelos;
		return	view('templates/header')
			.view('templates/reservar',$data)
			.view('templates/footer');
	}

	public function compra($IDVuelo){
    		if($this->request->getMethod()==='post'){
        	// Cargar el modelo de Vuelos
        	$model = new VuelosModel();
        	// Obtener el vuelo por ID
        	$vuelos = $model->getVueloById($IDVuelo);
    		}

    		// Pasar los datos del vuelo a la vista
    		$data = $vuelos;

	if ($this->request->getMethod() === 'post') {
        	// Capturar los datos del formulario
        	$nombre = $this->request->getPost('nombre');
        	$direccion = $this->request->getPost('direccion');
        	$ciudad = $this->request->getPost('ciudad');
        	$estado = $this->request->getPost('estado');
        	$cp = $this->request->getPost('cp');
        	$tarjeta = $this->request->getPost('tarjeta');
        	$mes = $this->request->getPost('mes');
        	$anio = $this->request->getPost('anio');
        	$nombre_tarjeta = $this->request->getPost('nombre_tarjeta');

        // Validar los datos del formulario (puedes usar las herramientas de validación de CodeIgniter 4)
	 if (!empty($nombre) && !empty($direccion) && !empty($ciudad) && 
		!empty($estado) && !empty($cp) && !empty($tarjeta) && 
		!empty($mes) && !empty($anio) && !empty($nombre_tarjeta)) {
        // Insertar los datos en la tabla de compras
        	$compraModel = new CompraModel();
        	$compraData = [
            		'IDVuelo' => $IDVuelo,
            		'Nombre' => $nombre,
            		'Direccion' => $direccion,
            		'Ciudad' => $ciudad,
            		'Estado' => $estado,
            		'CP' => $cp,
            		'TarjetaCredito' => $tarjeta,
            		'MES' => $mes,
            		'ANIO' => $anio,
            		'NombreTarjeta' => $nombre_tarjeta
        		];
        	if ($compraModel->insert($compraData)) {
    		// Mostrar mensaje de éxito
    			$mensaje = 'La compra se ha realizado con éxito';
		} else {
    		// Mostrar mensaje de error
    			$mensaje = 'Ha ocurrido un error al realizar la compra';
		}


		}
        	return  view('templates/header')
                	.view('templates/compra',['data' =>(array) $data])
                	.view('templates/footer');
    		}
	}
	public function confirmar(){
	return	view('templates/header')
		.view('templates/confirmar')
		.view('templates/footer');
	}

}
