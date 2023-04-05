<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\VuelosModel;
use App\Models\CompraModel;
use App\Models\ConfirmacionModel;

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

    		// Pasar los datos a la vista
    		$data = $vuelos;

        	return  view('templates/header')
                	.view('templates/compra',['data' =>(array) $data])
                	.view('templates/footer');
	}
	public function InsertarCompra(){
	// Capturar los datos del formulario
    		$compra = [
			'IDVuelo' =>$this->request->getPost('IDVuelo'),
        		'Nombre' => $this->request->getPost('Nombre'),
        		'Direccion' => $this->request->getPost('Direccion'),
        		'Ciudad' => $this->request->getPost('Ciudad'),
        		'Estado' => $this->request->getPost('Estado'),
        		'CP' => $this->request->getPost('CP'),
        		'TipoTarjeta' => $this->request->getPost('TipoTarjeta'),
        		'TarjetaCredito' => $this->request->getPost('TarjetaCredito'),
        		'Mes' => $this->request->getPost('Mes'),
        		'Anio' => $this->request->getPost('Anio'),
        		'NombreTarjeta' => $this->request->getPost('NombreTarjeta')
			];
			$compraModel = new CompraModel();

    			// Insertar los datos en la tabla de compras
    			$compraModel->insert($compra);
			$compraModel = new CompraModel();
			 // Obtener los datos de la compra y el vuelo
        		$compraVuelo = $compraModel->getRecibo($compra['IDVuelo']);


		return	view('templates/header')
			.view('templates/confirmar',['compraVuelo' => $compraVuelo])
			.view('templates/footer');
	}
	//public function VerCompra($idvuelos){
	 //if($this->request->getMethod()==='post'){
	//	$model = new CompraModel();
	//	$compras = $model->getRecibo($idvuelos);
	//	}
	//	$data = $compras;


	//	return	view('templates/header')
	//		.view('templates/recibo',['data' =>(array)$data])
	//		.view('templates/footer');
	//}

}
