<div class="container">
        <div class="container hero-unit">
        <h1>Thank you for your purchase today!</h1>
        <table class="table">
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                     <tr>
                    <td>Id</td>
                    <td><?=$data['IDCompra']?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>PendingCapture</td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><?=$data['Precio']*1.15?></td>
                </tr>
                <tr>
                    <td>Card Number</td>
                    <td><?=$data['TarjetaCredito']?></td>
                </tr>
                <tr>
                    <td>Expiration</td>
                    <td><?=$data['Mes']?>/<?=$data['Anio']?></td>
                </tr>
                <tr>
                    <td>Auth Code</td>
                    <td>8888</td>
                </tr>
                 <tr>
                <td>Date</td>
                <td>
			<?php
			$fechaHora = date('Y-m-d H:i:s');
			echo $fechaHora;
			?>
		</td>
            </tr>
            </tbody>
        </table>
