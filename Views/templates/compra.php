<div class="container">
	 <h2>Your Flight from: <?=$data['PaisOrigen']?> to <?=$data['PaisDestino']?> has been reserved</h2>
    <p>Airline: <?=$data['Aerolinea']?></p>
    <p>Flight Number: <?=$data['IDVuelo']?></p>
    <p>Price: <?=$data['Precio']?></p>
    <p>Arbitrary Fees and Taxes: <?=$data['Precio']*0.15?></p>
    <hr></hr>
    <p>Total Cost: <em><?=$data['Precio']*1.15?></em></p>
    <p>Please submit the form below to purchase the flight.</p>

    <form method="POST" action="confirmar.php" accept-charset="UTF-8"><input name="_token" type="hidden">
    <div class="control-group">
        <label class="control-label" for="inputName">Name</label>
        <div class="controls">
            <input id="inputName" placeholder="First Last" name="inputName" type="text">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="address">Address</label>
        <div class="controls">
            <input type="text" name="address" id="address" placeholder="123 Main St.">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="city">City</label>
        <div class="controls">
            <input type="text" name="city" id="city" placeholder="Anytown">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="state">State</label>
        <div class="controls">
            <input type="text" name="state" id="state" placeholder="State">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="zipCode">Zip Code</label>
        <div class="controls">
            <input type="text" name="zipCode" id="zipCode" placeholder="12345">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardType">Card Type</label>
        <div class="controls">
            <select class="form-inline" name="cardType" id="cardType">
                <option value="visa">Visa</option>
                <option value="amex">American Express</option>
                <option value="dinersclub">Diner's Club</option>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardNumber">Credit Card Number</label>
        <div class="controls">
            <input type="text" id="creditCardNumber" name="creditCardNumber" placeholder="Credit Card Number">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardMonth">Month</label>
        <div class="controls">
            <input type="text" id="creditCardMonth" name="creditCardMonth" placeholder="Month" value="11">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardYear">Year</label>
        <div class="controls">
            <input type="text" id="creditCardYear" name="creditCardYear" placeholder="Year" value="2017">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="nameOnCard">Name on Card</label>
        <div class="controls">
            <input type="text" id="nameOnCard" placeholder="John Smith" name="nameOnCard">
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
