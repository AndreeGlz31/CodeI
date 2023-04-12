<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\VuelosModel;
use App\Models\CompraModel;
use App\Models\ConfirmacionModel;
use App\Models\RegistroModel;

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

   public function LoginUsuario(){
    	$correo_electronico = $this->request->getPost('correo_electronico');
    	$contrasena = $this->request->getPost('contrasena');

    	$registroModel = new RegistroModel();
    	$usuario = $registroModel->buscarUsuario($correo_electronico, $contrasena);

    	if ($usuario) {
        	// Si el usuario es autenticado, inicie la sesión y redirija a la página de inicio
        	session()->set('usuario', $usuario);
        return redirect()->to('http://agonzalez.doqimi.net/index.php');
    	} else {
        	// Si el usuario no es autenticado, muestre un mensaje de error y redirija a la página de inicio de sesión
        	session()->setFlashdata('error', 'Correo electrónico o contraseña incorrectos');
        return redirect()->to('http://agonzalez.doqimi.net/login.php');
    		}
	}


	public function registro(){

             return  view('templates/navbar')
                     .view('templates/registro')
                     .view('templates/footer');
        }
	 public function registrar(){
		$this->validation = \Config\Services::validation();
    	// Configuramos las reglas de validación para los campos del formulario
    	$reglas = [
        	'nombre' => 'required|max_length[255]',
        	'compania' => 'required|max_length[255]',
        	'correo_electronico' => 'required|valid_email|is_unique[registro.correo_electronico]',
        	'contrasena' => 'required|min_length[8] |regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/]',
        	'confirmacion_contrasena' => 'required|matches[contrasena]'
    		];

    	// Personalizamos los mensajes de error
    	$mensajes = [
        	'contrasena.regex_match' => 'La contraseña debe incluir al menos una letra mayúscula, una letra minúscula, un número y un carácter especial (@$!%*?&).'
    		];

    	// Ejecutamos la validación con las reglas definidas anteriormente
    	if ($this->validate($reglas, $mensajes)) {
        	// Si la validación falla, mostramos los errores al usuario
        	return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    	} else {
        	// Si la validación pasa, guardamos los datos del usuario en la base de datos
        	$registroModel = new RegistroModel();

        	$data = [
            		'nombre' => $this->request->getPost('nombre'),
            		'compania' => $this->request->getPost('compania'),
            		'correo_electronico' => $this->request->getPost('correo_electronico'),
            		'contrasena' => password_hash($this->request->getPost('contrasena'), PASSWORD_DEFAULT),
            		'confirmacion_contrasena' => password_hash ($this->request->getPost('confirmacion_contrasena'),PASSWORD_DEFAULT),
        		];

        	if ($registroModel->insert($data)) {
            		// Si la inserción se realizó correctamente, redirigimos al usuario
            		return  redirect()->to('http://agonzalez.doqimi.net/login.php');
        	} else {
            	// Si la inserción falla, mostramos un mensaje de error al usuario
            	return redirect()->back()->withInput()->with('error', 'Ocurrió un error al registrar al usuario. Inténtelo de nuevo más tarde.');
        		}
    		}
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

	public function muestraVistaLogin() {
    		return view('login', ['error' => session()->getFlashdata('error')]);
}


}
