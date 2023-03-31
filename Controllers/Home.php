<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\VuelosModel;

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

		return	view('templates/header')
			.view('templates/compra',['data' =>(array) $data])
			.view('templates/footer');
	}

}

