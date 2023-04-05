<div class="container">
	 <h2>Your Flight from: <?=$data['PaisOrigen']?> to <?=$data['PaisDestino']?> has been reserved</h2>
    <p>Airline: <?=$data['Aerolinea']?></p>
    <p>Flight Number: <?=$data['IDVuelo']?></p>
    <p>Price: <?=$data['Precio']?></p>
    <p>Arbitrary Fees and Taxes: <?=$data['Precio']*0.15?></p>
    <hr></hr>
    <p>Total Cost: <em><?=$data['Precio']*1.15?></em></p>
    <p>Please submit the form below to purchase the flight.</p>

    <form method="POST" action="confirmar.php"accept-charset="UTF-8">
	<input id="inputIDVuelo" name="IDVuelo" type="hidden" value="<?= $data['IDVuelo'] ?>" readonly>

	<input name="_token" type="hidden">
    <div class="control-group">
        <label class="control-label" for="Nombre">Name</label>
        <div class="controls">
            <input id="inputNombre" placeholder="First Last" id="Nombre" name="Nombre" type="text">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="Direccion">Address</label>
        <div class="controls">
            <input type="text" name="Direccion" id="Direccion" placeholder="123 Main St.">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="Ciudad">City</label>
        <div class="controls">
            <input type="text" name="Ciudad" id="Ciudad" placeholder="Anytown">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="Estado">State</label>
        <div class="controls">
            <input type="text" name="Estado" id="Estado" placeholder="State">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="CP">Zip Code</label>
        <div class="controls">
            <input type="text" name="CP" id="CP" placeholder="12345">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="TipoTarjeta">Card Type</label>
        <div class="controls">
            <select class="form-inline" name="TipoTarjeta" id="TipoTarjeta">
                <option value="visa">Visa</option>
                <option value="amex">American Express</option>
                <option value="dinersclub">Diner's Club</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="TarjetaCredito">Credit Card Number</label>
        <div class="controls">
            <input type="text" id="TarjetaCredito" name="TarjetaCredito" placeholder="Credit Card Number">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="Mes">Month</label>
        <div class="controls">
            <input type="text" id="Mes" name="Mes" placeholder="Month" value="11">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="Anio">Year</label>
        <div class="controls">
            <input type="text" id="Anio" name="Anio" placeholder="Year" value="2017">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="NombreTarjeta">Name on Card</label>
        <div class="controls">
            <input type="text" id="NombreTarjeta" placeholder="John Smith" name="NombreTarjeta">
        </div>
    </div>


    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <input type="checkbox" name="rememberMe" id="rememberMe"> Remember me
            </label>
            <input class="btn btn-primary" type="submit" value="Purchase Flight">
        </div>
    </div>
    </form>
</div>
