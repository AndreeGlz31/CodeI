<!DOCTYPE html>
<html lang="en">
<div class="container">
 <h3>Flights from: <?=$vuelos[0]['PaisOrigen']?> to <?=$vuelos[0]['PaisDestino']?></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Choose</th>
            <th>Flight #</th>
            <th>Airline</th>
	    <th>Departs: <?=$vuelos[0]['PaisOrigen']?></th>
	    <th>Arrives: <?=$vuelos[0]['PaisDestino']?></th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
  <?php
	foreach ($vuelos as $vuelo) : ?>

       <tr>
	<form name="VA43" method="post" action="compra.php">
           <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
            <td><?= $vuelo['IDVuelo'] ?></td>
            <td><?= $vuelo['Aerolinea'] ?></td>
            <td><?= $vuelo['HoraDespeje'] ?></td>
            <td><?= $vuelo['HoraAterrizaje'] ?></td>
            <td><?= $vuelo['Precio'] ?></td>
        </tr>
	</form>
        <?php endforeach; ?>
    </tbody>
    </table>
    <input type="hidden" name="fromPort" value="Paris"/>
    <input type="hidden" name="toPort" value="Buenos Aires"/>
    </div>
</div>
