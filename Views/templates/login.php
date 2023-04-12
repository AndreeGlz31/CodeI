<!DOCTYPE html>
<html lang="en">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/login.php/ingresar">

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="recuperacion.php">
                                    Forgot Your Password?
                                </a>
					<p>
				 	<?php if (session()->getFlashdata('error')): ?>
            					<div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        				<?php endif; ?>
    				    </div>
				</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

