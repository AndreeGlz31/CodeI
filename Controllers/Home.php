<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
   public function vacaciones(){
	return view('templates/Vacaciones');
    }
   public function login(){
	return view('templates/login');
    }
   public function registro(){
	return view('templates/registro');
	}
}
