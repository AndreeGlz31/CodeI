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

  	$model = new VuelosModel();
        $data['vuelos'] = $model->findAll();
		return	view('templates/header')
			.view('templates/reservar',$data)
			.view('templates/footer');
	}
	public function compra($idVuelos){

		return	view('templates/header')
			.view('templates/compra')
			.view('templates/footer');
	}
}
