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
                    <td><?=$compraVuelo['IDCompra']?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><?=$compraVuelo['Precio']*1.15?></td>
                </tr>
                <tr>
                    <td>Card Number</td>
                    <td><?=$compraVuelo['TarjetaCredito']?></td>
                </tr>
                <tr>
                    <td>Expiration</td>
                    <td><?=$compraVuelo['Mes']?>/<?=$compraVuelo['Anio']?></td>
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

