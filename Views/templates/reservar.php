<!DOCTYPE html>
<html lang="en">
<div class="container">
 <?php
    if (isset($_POST['depature']) && isset($_POST['Dest'])) {
        $depature = $_POST['depature'];
        $dest = $_POST['Dest'];
        echo "<h3>Flights from $depature to $dest:</h3>";
    }
?>
    <table class="table">
        <thead>
        <tr>
            <th>Choose</th>
            <th>Flight #</th>
            <th>Airline</th>
		<?php
    			if (isset($_POST['depature'])) {
        		$depature = $_POST['depature'];
        		echo "<th>Departs: $depature </th>";
    			}
		?>
            <?php
    			if (isset($_POST['Dest'])) {
        		$dest = $_POST['Dest'];
        		echo "<th>Arrives: $dest </th>";
    			}
		?>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
  <?php foreach ($vuelos as $vuelo) : ?>
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

