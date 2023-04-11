<!DOCTYPE html>
<html lang="en">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

		<form class="form-horizontal" role="form" method="post" action="/registro.php/registrar">

			<div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Name</label>

				<div class="col-md-6">
                                	<input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
				</div>

			</div>

                        <div class="form-group">
                            <label for="compania" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">
                                <input id="compania" type="text" class="form-control" name="compania" required autofocus>
                         </div>
                        </div>


                        <div class="form-group">
                            <label for="correo_electronico" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="correo_electronico" type="email" class="form-control" name="correo_electronico" value="" required autofocus>

                        </div>
                        </div>

                        <div class="form-group">
                            <label for="contrasena" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="contrasena" type="password" class="form-control" name="contrasena" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmar_contrasena" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="confirmar_contrasena" type="password" class="form-control" name="confirmar_contrasena" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

